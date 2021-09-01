<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {
    public function __construct()
	{
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        //pagination settings
        $this->perPage = 10;
		
	}
    //list orders
	public function list_Projects($page=0)
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
        $Projects = $this->projects->get_allprojects($conditions);
		if($Projects){
           $ProjectsCount=count($Projects);
		}   
		else{
		  $ProjectsCount=0;
		}
		//set start and limit
	    $conditions['start'] = $page;
		$conditions['limit'] = $this->perPage;
			
		$data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$Projects = $this->projects->get_allprojects($conditions);
			//get pagination confing
			$config=$this->pagination_config($base_url=base_url().'admin/Projects/list_Projects',$total_rows=$ProjectsCount,$per_page=$this->perPage);
			// Initialize
			$this->pagination->initialize($config);
			//set data array
			$data['pagination'] = $this->pagination->create_links();
			$data['page']=$page;
			
			$data['Projects']=$Projects;
            $data['sub_view'] = $this->load->view('admin/projects/list_Projects', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function add_projects()
	{
        $data['title']=$this->lang->line("text_orders");
        if($this->permitted('list_users')){
            //get all user types
            $data['sub_view'] = $this->load->view('admin/projects/add_projects', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }


	public function create_property()
	{
		$pcode = _propertyCode($_REQUEST['builder'], $_REQUEST['p_type'], $_REQUEST['location']);
		
		$amenities = ''; $banks = '';
		if(!empty($this->input->post('amenities'))){
		  $amenities = implode(',', $this->input->post('amenities'));
		}
		if(!empty($this->input->post('banks'))){
		  $banks = implode(',', $this->input->post('banks'));
		}
		
		$post_data = array(
          'code' => $pcode,
          'builder_id' => $this->input->post('builder'),
          'property_name' => $this->input->post('project_name'),
          'locality_id' => $this->input->post('location'),
          'city_id' => $this->input->post('city'),
          'district_id' => $this->input->post('district'),
          'state_id' => $this->input->post('state'),
          'country_id' => $this->input->post('country'),
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
          'property_amenities' => $amenities,
          'banks_available' => $banks,
          'rera_approved' => $this->input->post('rera_approved'),
          'rera_registrationNumber' => $this->input->post('rera_registrationNumber'),
          'status' => 1,
          'created_by' => $this->get_user_id()
        );		
		$specifications = array(); $floorPlans = array();
		foreach($_REQUEST['specifications'] as $kk=>$val){
			if(isset($_REQUEST['specifications'][$kk]) && $val!=''){
			 $specifications[$kk] = $val;	
			}
		}
		foreach($_FILES['floor_planImage']['name'] as $k=>$fval){
			$fdata[$k]['floor_type'] = $_REQUEST['floor_type'][$k];
			$fdata[$k]['floor_size'] = $_REQUEST['floor_size'][$k];
			$fdata[$k]['floor_basePrice'] = $_REQUEST['floor_basePrice'][$k];
			
			/******For Floor Image******/
			$_FILES['mFile']['name']= $_FILES['floor_planImage']['name'][$k];
			$_FILES['mFile']['type']= $_FILES['floor_planImage']['type'][$k];
			$_FILES['mFile']['tmp_name']= $_FILES['floor_planImage']['tmp_name'][$k];
			$_FILES['mFile']['error']= $_FILES['floor_planImage']['error'][$k];
			$_FILES['mFile']['size']= $_FILES['floor_planImage']['size'][$k];
			$fdata[$k]['floor_planImage'] = $this->singleUpload('mFile', 'projects/floorPlans');
			/******For Floor Image******/
			
			$fdata[$k]['floor_totalPrice'] = $_REQUEST['floor_totalPrice'][$k];
			$fdata[$k]['floor_isStudy'] = $_REQUEST['floor_isStudy'][$k];
			$fdata[$k]['floor_toilets'] = $_REQUEST['floor_toilets'][$k];
			$floorPlans[] = $fdata;
		}
		
		if(isset($_FILES['payment_option']) && $_FILES['payment_option']['name']!=''){
		 $post_data['payment_option'] = $this->singleUpload('payment_option', 'projects/payment_option');
		}
		if(isset($_FILES['site_layout']) && $_FILES['site_layout']['name']!=''){
		 $post_data['site_layout'] = $this->singleUpload('site_layout', 'projects/site_layout');
		}				
		
		//XXS Clean
        $post_data = $this->security->xss_clean($post_data);
		
		$result = $this->projects->create_property($post_data, $specifications, $floorPlans);
		redirect('admin/projects/list_projects','refresh');
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
	
	
	public function delete_property()
	{
        $id = $this->uri->segment(4);
		if(isset($id)){
            //check permission
            if($this->permitted('delete_article')){
                $data['title']=$this->lang->line("text_delete_article");
                $post_data = array(
				  'status' => 0,
				  'updated_by' => $this->get_user_id()
				);
				$res = $this->projects->delete_property($id, $post_data);
				redirect('admin/projects/list_projects','refresh');
            }else{
                $data['title']=$this->lang->line("alert_access_denied");
                $success = TRUE;
                $message = '';
                $content = $this->load->view('errors/permission/denied',$data,TRUE);
            }
            $json_array = array('success' => $success, 'message' => $message,'content'=>$content);
            echo json_encode($json_array);
            exit();
        }
    }


}