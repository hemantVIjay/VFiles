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
       public function list_Projects($page = 0)
       {
           $data['title'] = $this->lang->line("text_orders");
           $conditions    = array();
          
           // Row position
           if ($page != 0) {
               $page = ($page - 1) * $this->perPage;
           }
           $keyword  = $this->input->post('keyword');
           $category = $this->input->post('category');
           $status   = $this->input->post('status');
           if (!empty($keyword)) {
               $conditions['search']['keyword'] = $keyword;
           }
           if (!empty($status)) {
               $conditions['search']['status'] = $status;
           }
           $Projects = $this->project->get_allprojects($conditions);
          
           if ($Projects) {
               $ProjectsCount = count($Projects);
           } else {
               $ProjectsCount = 0;
           }
           //set start and limit
           $conditions['start'] = $page;
           $conditions['limit'] = $this->perPage;
          
           $data['title'] = $this->lang->line("text_locations");
           $id            = $this->uri->segment(4);
           if ($this->permitted('list_articles')) {
               $Projects = $this->project->get_allprojects($conditions);
               //get pagination confing
               $config   = $this->pagination_config($base_url = base_url() . 'admin/Projects/list_Projects', $total_rows = $ProjectsCount, $per_page = $this->perPage);
               // Initialize
               $this->pagination->initialize($config);
               //set data array
               $data['pagination'] = $this->pagination->create_links();
               $data['page']       = $page;
              
               $data['Projects'] = $Projects;
               $data['sub_view'] = $this->load->view('admin/Projects/list_projects', $data, TRUE);
           } else {
               $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
           }
           $this->load->view('admin/_layout', $data);
       }
      
       public function add_projects()
       {
           $data['title'] = $this->lang->line("text_orders");
           if ($this->permitted('list_users')) {
               //get all user types
               $data['sub_view'] = $this->load->view('admin/Projects/add_projects', $data, TRUE);
           } else {
               $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
           }
           $this->load->view('admin/_layout', $data);
       }
      
      
       public function edit_project()
       {
           $data['title'] = $this->lang->line("text_orders");
           if ($this->permitted('list_users')) {
               //get all user types
               $id               = $this->uri->segment(4);
               $projectData      = $this->project->projectDetails($id);
               $data['info']     = $projectData;
               $data['id']       = $id;
               $data['sub_view'] = $this->load->view('admin/Projects/edit_projects', $data, TRUE);
           } else {
               $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
           }
           $this->load->view('admin/_layout', $data);
       }
      
       public function create_project()
       {
           //print_r($_REQUEST);exit;
          
           $pcode = _autoCode('Project');
          
           $amenities = '';
           $banks     = '';
           if (!empty($this->input->post('amenities'))) {
               $amenities = implode(',', $this->input->post('amenities'));
           }
           if (!empty($this->input->post('banks'))) {
               $banks = implode(',', $this->input->post('banks'));
           }
           $city           = _cityDetails($this->input->post('city'));
           $post_data      = array(
               'code' => $pcode,
               'builder_id' => $this->input->post('builder'),
               'project_name' => $this->input->post('project_name'),
               'locality_id' => $this->input->post('location'),
               'city_id' => $this->input->post('city'),
               //'district_id' => $city->district,
               'state_id' => $city->state,
               'country_id' => $city->country,
               'project_address' => $this->input->post('address'),
               'project_type' => $this->input->post('p_type'),
               'no_of_towers' => $this->input->post('no_of_towers'),
               'no_of_flats' => $this->input->post('no_of_flats'),
               'total_area' => $this->input->post('total_area'),
               'project_phase' => $this->input->post('project_phase'),
               'project_start_date' => date('Y-m-d', strtotime($this->input->post('project_start_date'))),
               'architect_name' => $this->input->post('architect_name'),
               'project_start_date' => $this->input->post('project_start_date'),
               'project_overview' => htmlentities($this->input->post('project_overview')),
               'project_amenities' => $amenities,
               'banks_available' => $banks,
               'rera_approved' => $this->input->post('rera_approved'),
               'rera_registrationNumber' => $this->input->post('rera_registrationNumber'),
               'status' => 1,
               'created_by' => $this->get_user_id()
           );
           $specifications = array();
           $floorPlans     = array();
           if (isset($_REQUEST['specifications'])) {
               foreach ($_REQUEST['specifications'] as $kk => $val) {
                   if (isset($_REQUEST['specifications'][$kk]) && $val != '') {
                       $specifications[$kk] = $val;
                   }
               }
           }
           //if(isset($_FILES['floor_planImage'])){
           if (isset($_REQUEST['floor_totalRoomSizes'])) {
               foreach ($_REQUEST['floor_totalRoomSizes'] as $k => $fval) {
                   
				   /******For Floor Image******/
                   /*$_FILES['mFile']['name']      = $_FILES['floor_planImage']['name'][$k];
                   $_FILES['mFile']['type']      = $_FILES['floor_planImage']['type'][$k];
                   $_FILES['mFile']['tmp_name']  = $_FILES['floor_planImage']['tmp_name'][$k];
                   $_FILES['mFile']['error']     = $_FILES['floor_planImage']['error'][$k];
                   $_FILES['mFile']['size']      = $_FILES['floor_planImage']['size'][$k];
                   $fdata[$k]['floor_planImage'] = $this->singleUpload('mFile', 'projects/floorPlans');*/
                   /******For Floor Image******/
                  
                   $fdata[$k]['floor_totalRoomSizes'] = $_REQUEST['floor_totalRoomSizes'][$k];
                   $fdata[$k]['floor_allRoomSizes']   = $_REQUEST['floor_allRoomSizes'][$k];
                   $fdata[$k]['floor_roomDesc']       = $_REQUEST['floor_roomDesc'][$k];
                   $fdata[$k]['floor_bedrooms']       = $_REQUEST['floor_bedrooms'][$k];
                   $fdata[$k]['floor_bathrooms']      = $_REQUEST['floor_bathrooms'][$k];
                   $fdata[$k]['floor_unit']           = $_REQUEST['floor_unit'][$k];
                   $fdata[$k]['floor_size']           = $_REQUEST['floor_size'][$k];
                   $fdata[$k]['floor_builtupArea']    = $_REQUEST['floor_builtupArea'][$k];
                   $fdata[$k]['floor_basePrice']      = $_REQUEST['floor_basePrice'][$k];
                   $fdata[$k]['floor_totalPrice']     = $_REQUEST['floor_totalPrice'][$k];
                   $floorPlans[]                      = $fdata;
               }
           }
          
          
           if (isset($_FILES['payment_option']) && $_FILES['payment_option']['name'] != '') {
               $post_data['payment_option'] = $this->singleUpload('payment_option', 'projects/payment_option');
           }
           if (isset($_FILES['site_layout']) && $_FILES['site_layout']['name'] != '') {
               $post_data['site_layout'] = $this->singleUpload('site_layout', 'projects/site_layout');
           }
		   if (isset($_FILES['main_image']) && $_FILES['main_image']['name'] != '') {
               $post_data['main_image'] = $this->singleUpload('main_image', 'projects/Main Image');
           }
          
           //XXS Clean
           $post_data = $this->security->xss_clean($post_data);
          
           $result           = $this->project->create_project($post_data, $specifications, $floorPlans);
           $rec              = $this->project->project_Info($result['id']);
           $arr['name']      = 'project';
           $arr['url']       = $rec->project_name;
           $arr['parent_id'] = $rec->id;
           $arr['status']    = 1;
           $arr['file']      = '';
           $arr['is_active'] = 1;
           $lr               = _listRecord($arr);
           redirect('admin/projects/list_projects', 'refresh');
       }
      
       public function update_project()
       {
           $id = $this->input->post('id');
           
           $amenities = '';
           $banks     = '';
           if (!empty($this->input->post('amenities'))) {
               $amenities = implode(',', $this->input->post('amenities'));
           }
           if (!empty($this->input->post('banks'))) {
               $banks = implode(',', $this->input->post('banks'));
           }
           $city           = _cityDetails($this->input->post('city'));
           $post_data      = array(
               'builder_id' => $this->input->post('builder'),
               'project_name' => $this->input->post('project_name'),
               'locality_id' => $this->input->post('location'),
               'city_id' => $this->input->post('city'),
               'state_id' => $city->state,
               'country_id' => $city->country,
               'project_address' => $this->input->post('address'),
               'project_type' => $this->input->post('p_type'),
               'no_of_towers' => $this->input->post('no_of_towers'),
               'no_of_flats' => $this->input->post('no_of_flats'),
               'total_area' => $this->input->post('total_area'),
               'project_phase' => $this->input->post('project_phase'),
               'project_start_date' => _sqlDate($this->input->post('project_start_date')),
               'architect_name' => $this->input->post('architect_name'),
               'project_overview' => htmlentities($this->input->post('project_overview')),
               'project_amenities' => $amenities,
               'banks_available' => $banks,
               'rera_approved' => $this->input->post('rera_approved'),
               'rera_registrationNumber' => $this->input->post('rera_registrationNumber')
           );
           $specifications = array();
           $floorPlans     = array();
           if (isset($_REQUEST['specifications'])) {
               foreach ($_REQUEST['specifications'] as $kk => $val) {
                   if (isset($_REQUEST['specifications'][$kk]) && $val != '') {
                       $specifications[$kk] = $val;
                   }
               }
           }
           //if(isset($_FILES['floor_planImage'])){
           if (isset($_REQUEST['floor_totalRoomSizes'])) {
			  
               foreach ($_REQUEST['floor_totalRoomSizes'] as $k => $fval) {
                   
				   /******For Floor Image******/
                   /*$_FILES['mFile']['name']      = $_FILES['floor_planImage']['name'][$k];
                   $_FILES['mFile']['type']      = $_FILES['floor_planImage']['type'][$k];
                   $_FILES['mFile']['tmp_name']  = $_FILES['floor_planImage']['tmp_name'][$k];
                   $_FILES['mFile']['error']     = $_FILES['floor_planImage']['error'][$k];
                   $_FILES['mFile']['size']      = $_FILES['floor_planImage']['size'][$k];
                   $fdata[$k]['floor_planImage'] = $this->singleUpload('mFile', 'projects/floorPlans');*/
                   /******For Floor Image******/
                  
                   $fdata[$k]['floor_totalRoomSizes'] = $_REQUEST['floor_totalRoomSizes'][$k];
                   $fdata[$k]['floor_allRoomSizes']   = $_REQUEST['floor_allRoomSizes'][$k];
                   $fdata[$k]['floor_roomDesc']       = $_REQUEST['floor_roomDesc'][$k];
                   $fdata[$k]['floor_bedrooms']       = $_REQUEST['floor_bedrooms'][$k];
                   $fdata[$k]['floor_bathrooms']      = $_REQUEST['floor_bathrooms'][$k];
                   $fdata[$k]['floor_unit']           = $_REQUEST['floor_unit'][$k];
                   $fdata[$k]['floor_size']           = $_REQUEST['floor_size'][$k];
                   $fdata[$k]['floor_builtupArea']    = $_REQUEST['floor_builtupArea'][$k];
                   $fdata[$k]['floor_basePrice']      = $_REQUEST['floor_basePrice'][$k];
                   $fdata[$k]['floor_totalPrice']     = $_REQUEST['floor_totalPrice'][$k];
                   $floorPlans[]                      = $fdata;
               }
           }
           if (isset($_FILES['main_image']) && $_FILES['main_image']['name'] != '') {
               $post_data['main_image'] = $this->singleUpload('main_image', 'projects/Main Image');
           }
           if (isset($_FILES['payment_option']) && $_FILES['payment_option']['name'] != '') {
               $post_data['payment_option'] = $this->singleUpload('payment_option', 'projects/payment_option');
           }
           if (isset($_FILES['site_layout']) && $_FILES['site_layout']['name'] != '') {
               $post_data['site_layout'] = $this->singleUpload('site_layout', 'projects/site_layout');
           }
          
           //XXS Clean
           $post_data = $this->security->xss_clean($post_data);
          
           $result = $this->project->update_project($id, $post_data, $specifications, $floorPlans);
           $rec = $this->project->project_Info($id);
           $arr['name'] = 'project';
           $arr['url']  = $rec->project_name;
           $arr['parent_id'] = $rec->id;
           $lr = _updatelistRecord($arr);
           redirect('admin/projects/list_projects','refresh');
       }
      
      
       public function location_details()
       {
           $locations        = $this->masters->get_location($_REQUEST['id']);
           $data['city']     = $locations->city_id;
           $data['district'] = $locations->district_id;
           $data['state']    = $locations->state_id;
           $data['country']  = $locations->country_id;
           echo json_encode($data);
           exit;
       }
      
      
       public function delete_project()
       {
           $id = $this->uri->segment(4);
           if (isset($id)) {
               //check permission
               if ($this->permitted('delete_article')) {
                   $data['title'] = $this->lang->line("text_delete_article");
                   $post_data     = array(
                       'status' => 0,
                       'updated_by' => $this->get_user_id()
                   );
                   $res           = $this->project->delete_project($id, $post_data);
                   redirect('admin/projects/list_projects', 'refresh');
               } else {
                   $data['title'] = $this->lang->line("alert_access_denied");
                   $success       = TRUE;
                   $message       = '';
                   $content       = $this->load->view('errors/permission/denied', $data, TRUE);
               }
               $json_array = array(
                   'success' => $success,
                   'message' => $message,
                   'content' => $content
               );
               echo json_encode($json_array);
               exit();
           }
       }
      
      
   }
   