<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	//Home Page
	public function index()
	{
		$data['title']=$this->lang->line("text_home");
		$data['sub_view'] = $this->load->view('site/pages/home', $data, TRUE);
        $this->load->view('site/_layout', $data);
	}
	
	
	
	
	public function create_property()
      {
		  //echo$pcode = _propertyCode($_REQUEST['builder'], $_REQUEST['p_type'], $_REQUEST['location']);
          //exit;
		  $pcode = '';
		  $amenities = '';
          if (!empty($this->input->post('pvAMNTS'))) {
              $amenities = implode(',', $this->input->post('pvAMNTS'));
          }
          
          $post_data  = array(
              'code' => $pcode,
              //'builder_id' => $this->input->post('builder'),
              'property_for' => $this->input->post('pvIWT'),
			  'property_type' => $this->input->post('propertyType'),
			  'property_category' => $this->input->post('pvPTYP'),
              //'property_name' => $this->input->post('project_name'),
              'bedrooms' => $this->input->post('pvBHK'),
              'bathrooms' => $this->input->post('pvBTH'),
              'balcony' => $this->input->post('pvBLCNY'),
              'furnish_type' => $this->input->post('pvFRNTYP'),
              'open_parking' => $this->input->post('pvOPNPRK'),
              'covered_parking' => $this->input->post('pvCVRPRK'),
              'cost' => $this->input->post('cost'),
              'maintenance_charges' => $this->input->post('maintenance_charges'),
              'locality' => $this->input->post('locality'),
              'project' => $this->input->post('project'),
              'city_id' => $this->input->post('city'),
              //'property_address' => $this->input->post('address'),              
              'builtup_area' => $this->input->post('builtup_area'),
              'carpet_area' => $this->input->post('carpet_area'),
              'construction_status' => $this->input->post('pvCONSTS'),
			  'property_amenities' => $amenities,
              'status' => 1,
              'created_by' => $this->get_user_id()
          );
		  
          //XXS Clean
          $post_data = $this->security->xss_clean($post_data);
          $result    = $this->site->create_property($post_data);
          
          redirect('post-property', 'refresh');
      }
	
	
	


}
