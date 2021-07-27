<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Libraries
        $this->load->library(array('pagination'));
        //pagination settings
		$this->perPage = 10;
		//load helper for language
        $this->load->helper('language');
		
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
		//get all language data
    public function get_all_language_keys(){
        $all_lang_array=$this->lang->language;
        $json_array = array('languages' => $all_lang_array);
        echo json_encode($json_array);
        exit();
    }
}
