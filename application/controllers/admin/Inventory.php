<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends MY_Controller {
    public function __construct()
	{
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        //Load Libraries
        $this->load->library(array('pagination'));
        //pagination settings
        $this->perPage = 10;
		
	}
    //list orders
	public function list_inventories()
	{
        $data['title']=$this->lang->line("text_stocks");
        if($this->permitted('list_users')){
            //get all user types
            $user_types = $this->user_model->get_user_types();
            $data['user_types']=$user_types;
            $data['sub_view'] = $this->load->view('admin/inventories/list_stocks', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function list_products()
	{
        $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            //$products = $this->inventory_model->get_all_products();
            $products = _products();
            $data['products'] =  $products;
            $data['sub_view'] = $this->load->view('admin/inventories/list_products', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function daily_purchases()
	{
        $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            $purchases = $this->inventory_model->get_daily_purchases();
            $data['purchases'] =  $purchases;
            $data['sub_view'] = $this->load->view('admin/inventories/daily_purchase', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function daily_purchases_all()
	{
        $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            $purchases = $this->inventory_model->get_daily_purchases();
            $data['purchases'] =  $purchases;
            $data['sub_view'] = $this->load->view('admin/inventories/daily_purchases', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function purchases_list()
	{
        $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            $purchases = $this->inventory_model->get_daily_purchases();
            $data['purchases'] =  $purchases;
            $data['sub_view'] = $this->load->view('admin/inventories/daily_purchases_list', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function add_new_purchase()
	{
        $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            $purchases = $this->inventory_model->get_all_products();
            $data['purchases'] =  _products();//$purchases;
            $data['sub_view'] = $this->load->view('admin/inventories/add_purchase', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function add_purchase()
	{ 
	  $last_id = $this->inventory_model->save_purcahse();
	  echo$last_id;	  
    }

	public function add_zoneQuantities()
	{ 
	  $last_id = $this->inventory_model->save_zoneQuantities();
	  echo$last_id;	  
    }

	public function save_purchaseDaily()
	{ 
	  $last_id = $this->inventory_model->save_purchaseDaily();
	  echo$last_id;
    }
	
	public function assign_inventory()
	{ 
	  $last_id = $this->inventory_model->save_assign_inventory();
	  echo$last_id;
    }

	public function assign_products()
	{ 
	     $data['title']=$this->lang->line("text_products");
        if($this->permitted('list_users')){
            //get all user types
            $purchases = $this->inventory_model->get_purchaseQuantities();
            $data['purchases'] =  $purchases;
            $data['sub_view'] = $this->load->view('admin/inventories/assign_products', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
	  
    }
}