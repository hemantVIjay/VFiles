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


}
