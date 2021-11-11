<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters extends MY_Controller {
    function __construct(){
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        
    }
    //list banks
	
	public function list_banks()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$banks = $this->masters->get_banks($id);
            $data['banks']=$banks;
            $data['sub_view'] = $this->load->view('admin/Masters/_banks', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function list_propertiesType()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$propertyTypes = $this->masters->get_propertyTypes($id);
            $data['propertyTypes']=$propertyTypes;
            $data['sub_view'] = $this->load->view('admin/Masters/_propertiesType', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function list_floorType()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$floorTypes = $this->masters->get_floorTypes($id);
            $data['floorTypes']=$floorTypes;
            $data['sub_view'] = $this->load->view('admin/Masters/_floorType', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }
	
	public function list_bedrooms()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$floorTypes = $this->masters->get_floorTypes($id);
            $data['floorTypes']=$floorTypes;
            $data['sub_view'] = $this->load->view('admin/Masters/_bedrooms', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }
	
	public function list_bathrooms()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$floorTypes = $this->masters->get_floorTypes($id);
            $data['floorTypes']=$floorTypes;
            $data['sub_view'] = $this->load->view('admin/Masters/_bathrooms', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function list_categories()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$floorTypes = $this->masters->get_floorTypes($id);
            $data['floorTypes']=$floorTypes;
            $data['sub_view'] = $this->load->view('admin/Masters/_categories', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function create_bank()
	{
		$post_data = array(
          'name' => $this->input->post('bank_name'),
          'created_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/banks/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['bank_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('bank_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->masters->create_bank($post_data);
        redirect('admin/masters/list_banks','refresh');
    }

	public function create_floorType()
	{
		$post_data = array(
          'name' => $this->input->post('type_name'),
          'created_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/propertyType/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['type_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('type_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->masters->create_floorType($post_data);
        redirect('admin/masters/list_floorType','refresh');
    }
	
	
	public function create_propertyType()
	{
		$post_data = array(
          'name' => $this->input->post('type_name'),
          'created_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/propertyType/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['type_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('type_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->masters->create_propertyType($post_data);
        redirect('admin/masters/list_propertiesType','refresh');
    }

	public function add_amenities()
	{
		$post_data = array(
          'name' => $this->input->post('amenity_name'),
          'created_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/amenities/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['amenity_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('amenity_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->amenities_model->create_amenity($post_data);
        redirect('admin/amenities/list_amenities','refresh');
    }
	
	public function edit_amenities()
	{
		$post_data = array(
          'name' => $this->input->post('amenity_name'),
          'updated_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/amenities/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['amenity_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('amenity_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->amenities_model->create_amenity($post_data);
        redirect('admin/amenities/list_amenities','refresh');
    }
	
	
	public function delete_amenities()
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
				$res = $this->amenities_model->delete_amenities($id, $post_data);
				redirect('admin/amenities/list_amenities','refresh');
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