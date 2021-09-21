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
		foreach ($p_images as $key => $image) {
		   $i_arr[$image->image_type][$key] = $image;
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


}
