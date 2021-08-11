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
		$data['title']='Homepage';
		$data['sub_view'] = $this->load->view('site/pages/home', $data, TRUE);
        $this->load->view('site/_layout', $data); 
	}


}
