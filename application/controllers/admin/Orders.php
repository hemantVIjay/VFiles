<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {
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
		$this->load->model(array('user_model','settings_model','order_model'));
		
	}
    //list orders
	public function list_orders()
	{
        $data['title']=$this->lang->line("text_orders");
        if($this->permitted('list_users')){
            //get all user types
            $orders = $this->order_model->get_all_orders();
            $data['orders']=$orders;
            $data['sub_view'] = $this->load->view('admin/orders/list_orders', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

    //Order Details
	public function view_order()
	{
        $data['title']=$this->lang->line("text_orders");
        if($this->permitted('list_users')){
            $id = $this->uri->segment(4);
			$info = _orderDetails($id);;
            $data['Details']  = $info;
            $data['id']       = $id;
            $data['sub_view'] = $this->load->view('admin/orders/order_details', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

}