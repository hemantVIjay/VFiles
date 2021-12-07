<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
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

	public function search()
	{
		$pdata = array(); $result = array();
		$city = $this->uri->segment(3);
		$mt = explode('_',base64_decode($_GET['content']));
		if($mt[0]=='BLD'){
		 $pdata['builder_id'] = $mt[1];	
		}if($mt[0]=='PROJ'){
		 $pdata['project'] = $mt[1];	
		}if($mt[0]=='LOC'){
		 $pdata['locality'] = $mt[1];	
		}
		$data['title']=$this->lang->line("text_home");
		$pdata['property_type'] = _getSlugID('property_categories', $_GET['type']);
		//$pdata['location'] = $_GET['location'];
		//$pdata['content'] = 
		$pdata['city_id'] = _getSlugID('cities', $city); 
		$result = $this->home->search_properties($pdata);
		$data['listings'] = $result;
		$data['sub_view'] = $this->load->view('site/pages/properties-listings', $data, TRUE);
        $this->load->view('site/_layout', $data);
	}

	public function properties_details()
	{
		$data['title']=$this->lang->line("text_home");
		$id  = $this->uri->segment(2);
		$result = $this->home->property_details($id);
		$p_images = $this->home->property_images($id);
		$i_arr = array();
		if(!empty($p_images)){
		  foreach ($p_images as $key => $image) {
			   $i_arr[$image->image_type][$key] = $image;
		  }	
		}
        $data['property_info'] = $result;
        $data['floor_plans'] = $result;
        $data['properties_images'] = $i_arr;
		$data['sub_view'] = $this->load->view('site/pages/properties-details', $data, TRUE);
        $this->load->view('site/_layout', $data);
	}

	public function properties_listings()
	{
		$data['title']=$this->lang->line("text_home");
		$data['sub_view'] = $this->load->view('site/pages/properties-listings', $data, TRUE);
        $this->load->view('site/_layout', $data);
	}

	public function locations_info()
	{
		$data['title']=$this->lang->line("text_home");
		$data['sub_view'] = $this->load->view('site/pages/locations-info', $data, TRUE);
        $this->load->view('site/_layout', $data);
	}

	public function save_review()
	{
		$post_data = array(
                        'listing_id' => $this->input->post('listing_id'),
                        'stars' => $this->input->post('rating'),
                        'message' => $this->input->post('message'),
                        'user_id' => $this->get_user_id(),
                        'date_publish' => date('Y-m-d')
                    );
		$result = $this->home->save_rating($post_data);
		if ($result['status']==TRUE &&$result['label']=='SUCCESS') {
                        $success = TRUE;
                        $message = 'Review successfully posted.';
                    }elseif($result['status']==FALSE &&$result['label']=='ERROR'){
                        $success = FALSE;
                        $message = $this->lang->line("Review not posted.");
                    }
					            $json_array = array('success' => $success, 'message' => $message);
            echo json_encode($json_array);
            exit();
	}
	
	
	public function search_locations(){
		
		$cities = [];	  
      $cities = $this->home->_searchLocations($this->input->get("q"), $this->input->get("city"));
      echo json_encode($cities);
	  exit;
		
		
	}

	public function search_properties(){
	  $cities = [];	  
      $cities = $this->home->_searchProperties($this->input->get("q"));
	  echo json_encode($cities);
	  exit;		
	}

	public function find_listings(){
	  $cities = [];	  
      $cities = $this->home->_searchListing($this->input->get("q"));
	  echo json_encode($cities);
	  exit;		
	}


}
