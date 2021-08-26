<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {
    public function __construct()
	{
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        //pagination settings
        $this->perPage = 5;
		
	}
    //list orders
	public function list_properties($page=0)
	{
        $data['title']=$this->lang->line("text_orders");
        $conditions = array();
        // Row position
        if($page != 0){
            $page = ($page-1) * $this->perPage;
        }
        $keyword=$this->input->post('keyword');
        $category=$this->input->post('category');
        $status=$this->input->post('status');
        if(!empty($keyword)){
            $conditions['search']['keyword'] = $keyword;
        }
        if(!empty($status)){
            $conditions['search']['status'] = $status;
        }
        $Properties = $this->properties->get_allProperties($conditions);
		if($Properties){
           $propertiesCount=count($Properties);
		}   
		else{
		  $propertiesCount=0;
		}
		//set start and limit
	    $conditions['start'] = $page;
		$conditions['limit'] = $this->perPage;
			
		$data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$Properties = $this->properties->get_allProperties($conditions);
			//get pagination confing
			$config=$this->pagination_config($base_url=base_url().'admin/properties/list_properties',$total_rows=$propertiesCount,$per_page=$this->perPage);
			// Initialize
			$this->pagination->initialize($config);
			//set data array
			$data['pagination'] = $this->pagination->create_links();
			$data['page']=$page;
			
			$data['Properties']=$Properties;
            $data['sub_view'] = $this->load->view('admin/Properties/list_properties', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function add_properties()
	{
        $data['title']=$this->lang->line("text_orders");
        if($this->permitted('list_users')){
            //get all user types
            $data['sub_view'] = $this->load->view('admin/Properties/add_properties', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }


	public function create_property()
	{
		$pcode = _propertyCode($_REQUEST['builder'], $_REQUEST['p_type'], $_REQUEST['location']);
		//echo'<pre/>';print_r($_REQUEST);exit;
		$post_data = array(
          'code' => $pcode,
          'builder_id' => $this->input->post('builder'),
          'property_name' => $this->input->post('project_name'),
          'locality_id' => $this->input->post('location'),
          'city_id' => $this->input->post('city'),
          'district_id' => $this->input->post('district'),
          'state_id' => $this->input->post('state'),
          'country_id' => 101,//$this->input->post('country'),
          'property_address' => $this->input->post('address'),
          'property_type' => $this->input->post('p_type'),
          'no_of_towers' => $this->input->post('no_of_towers'),
          'no_of_flats' => $this->input->post('no_of_flats'),
          'total_area' => $this->input->post('total_area'),
          'project_phase' => $this->input->post('project_phase'),
          'project_start_date' => date('Y-m-d', strtotime($this->input->post('project_start_date'))),
          'architect_name' => $this->input->post('architect_name'),
          'project_start_date' => $this->input->post('project_start_date'),
          'project_overview' => $this->input->post('project_overview'),
          'property_amenities' => implode(',', $this->input->post('amenities')),
          //'specifications' => $this->input->post('country_id'),
          'banks_available' => implode(',', $this->input->post('banks')),
          'status' => 1,
          'created_by' => $this->get_user_id()
        );		
		
		$post_data['payment_option'] = $this->singleUpload('payment_option', 'payment_option', 'payment_option');
		$post_data['site_layout'] = $this->singleUpload('site_layout', 'site_layout', 'site_layout');
		
		//XXS Clean
        $post_data = $this->security->xss_clean($post_data);
		
		$result = $this->properties->create_property($post_data);
		redirect('admin/properties/list_properties','refresh');
    }
	
	
	function singleUpload($field, $postField, $path)
	{
		//upload config
        $config['upload_path'] = 'uploads/properties/'.$path;
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size'] = '1024'; //1 MB
        //Upload Category Icon
        if(isset($_FILES[$postField]['name'])){
        $this->load->library('upload', $config);
           if (!$this->upload->do_upload($postField)) {
            $this->upload->display_errors();
			return false;
			} else {
			  $upload_data=$this->upload->data();
			  $post_data[$field]=$upload_data['file_name'];
           }
        }
		return $post_data[$field];
	}

	public function location_details()
	{
     	$locations = $this->masters->get_location($_REQUEST['id']);
		$data['city'] = $locations->city_id;
		$data['district'] = $locations->district_id;
		$data['state'] = $locations->state_id;
		$data['country'] = $locations->country_id;
		echo json_encode($data);
        exit;	
    }
	
	
	private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }

}