<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {
    public function __construct()
	{
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        //Load Libraries
        $this->load->library(array('pagination'));
        //pagination settings
        $this->perPage = 10;
		//load models
		$this->load->model(array('user_model','settings_model'));
		
	}
    //list orders
	public function list_properties()
	{
        $data['title']=$this->lang->line("text_orders");
        if($this->permitted('list_users')){
            //get all user types
            $user_types = $this->user_model->get_user_types();
            $data['user_types']=$user_types;
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
            $user_types = $this->user_model->get_user_types();
            $data['user_types']=$user_types;
            $data['sub_view'] = $this->load->view('admin/Properties/add_properties', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

}