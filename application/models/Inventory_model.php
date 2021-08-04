<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends MY_Model{
	
	//get all user types
	public function products(){
		$this->_table_name='products';
		$result=$this->get($id = NULL, $single = FALSE, $AsOrder = "asc", $limit= NULL, $pageNumber=0);
		return $result;
	}
	
	public function get_all_products(){
		$this->db->select('r.*');
		$this->db->from('products r');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}
	
	public function get_daily_purchases(){
		$this->db->select('A.*, B.*, C.*, B.id as R_ID');
		$this->db->from('daily_purchases A');		
		$this->db->join('product_quantity B', 'A.relation_id = B.id', 'RIGHT');
		$this->db->join('products C', 'B.product_id = C.id', 'LEFT');
		$this->db->where('DATE(B.created_at) >= CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function get_required_purchases(){
		$this->db->select('A.*, C.*, A.created_at as added_on');
		$this->db->from('product_quantity A');
		$this->db->join('products C', 'A.product_id = C.id', 'LEFT');
		$this->db->where('DATE(A.created_at) >= CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function get_purchaseQuantities(){
		$this->db->select('A.*, B.*, B.id as R_ID, A.id as purchase_id, A.created_at as added_on');
		$this->db->from('daily_purchases A');		
		$this->db->join('product_quantity B', 'A.relation_id = B.id', 'LEFT');
		//$this->db->join('products C', 'B.product_id = C.id', 'LEFT');
		$this->db->where('DATE(B.created_at) >= CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function save_purcahse(){
	  $data = array();

	  $data['relation_id'] = $_POST['relation_id'];
	  $pp = $this->get_purchase($data);
	  $data['purchased_quantity'] = $_POST['p_q'];
	  $data['unit_price'] = $_POST['p_u'];
	  $data['comments'] = $_POST['comments'];
	  $data['status'] = 1;
	  $data['created_by'] = $_SESSION['login']['user_id'];
	  $data['created_at'] = date('Y-m-d H:i:s');
	 
	  if(empty($pp)){
	  
			$this->db->insert('daily_purchases', $data);
			return $this->db->insert_id();
		}else{
			$this->db->where('relation_id', $_POST['relation_id']);
			$this->db->update('daily_purchases', $data);
			return $pp['id'];
		}
	}

	public function save_zoneQuantities(){
	  $data = array();

	  $data['product_id'] = $_POST['product'];
	  $data['slot']       = $_POST['slot'];
	  $data['zone_id']    = $_POST['zone'];
	  $pp = $this->get_ZoneQuantity($data);
	  $data['quantity'] = $_POST['qty'];
	  $data['status'] = 1;
	  $data['created_by'] = $_SESSION['login']['user_id'];
	  $data['created_at'] = date('Y-m-d H:i:s');
	 
	  if(empty($pp)){	  
			$this->db->insert('daily_zone_quantities', $data);
			return $this->db->insert_id();
		}else{
			$data['updated_by'] = $_SESSION['login']['user_id'];
	        $data['updated_at'] = date('Y-m-d H:i:s');
			
			$cond = "DATE(created_at) = CURDATE()";
			$this->db->where('product_id', $_POST['product']);
			$this->db->where('slot', $_POST['slot']);
			$this->db->where('zone_id', $_POST['zone']);
			$this->db->where($cond);
			$this->db->update('daily_zone_quantities', $data);
			return $pp['id'];
		}
	}

	public function save_purchaseDaily(){
	  
	  $data = array();

	  $data['product_id'] = $_POST['relation_id'];
	  $pp = $this->get_purchaseDaily($data);
	  $data['required_quantity'] = $_POST['p_q'];
	  $data['status'] = 1;
	  $data['created_by'] = $_SESSION['login']['user_id'];
	  $data['created_at'] = date('Y-m-d H:i:s');
	 //print_r($pp);exit;
	  if(empty($pp)){
			$this->db->insert('product_quantity', $data);
			return $this->db->insert_id();
		}else{
			$this->db->where('product_id', $_POST['relation_id']);
			$this->db->update('product_quantity', $data);
			return $pp['id'];
		}
	}

	public function save_assign_inventory(){
	  
	  $data = array();

	  $data['product_id']  = $_POST['product_id'];
	  $data['purchase_id'] = $_POST['purchase_id'];
	  $data['user_id']     = $_POST['user_id'];
	  
	  $pp = $this->get_assignMent($data);
	  
	  $data['assigned_quantity'] = $_POST['assigned_quantity'];
	  $data['comments']          = $_POST['comments'];
	  $data['status'] = 1;
	  
	 //print_r($pp);exit;
	  
	  if(empty($pp)){
		    $data['created_by'] = $_SESSION['login']['user_id'];
	        $data['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert('user_quantities', $data);
			return $this->db->insert_id();
		}else{
			
			$data['updated_by'] = $_SESSION['login']['user_id'];
	        $data['updated_at'] = date('Y-m-d H:i:s');
			
			$this->db->where('product_id', $_POST['product_id']);
			$this->db->where('purchase_id', $_POST['purchase_id']);
			$this->db->where('user_id', $_POST['user_id']);
			$this->db->update('user_quantities', $data);
			return $pp['id'];
		}
	}

	//get user by id
	public function get_purchase($data){
		$this->db->select('u.*');
        $this->db->from('daily_purchases u');
		$this->db->where($data);
		$query = $this->db->get();
		//$query->row_array();
		//echo$this->db->last_query();exit;
		return ($query->num_rows() == 1)?$query->row_array():FALSE;
	}

	//get user by id
	public function get_ZoneQuantity($data){
		$cond = "DATE(created_at) = CURDATE()";
		$this->db->select('u.*');
        $this->db->from('daily_zone_quantities u');
		$this->db->where($data);
		$this->db->where($cond);
		$query = $this->db->get();
		return ($query->num_rows() == 1)?$query->row_array():FALSE;
	}

	//get user by id
	public function get_purchaseDaily($data){
		$this->db->select('u.*');
        $this->db->from('product_quantity u');
		$this->db->where($data);
		$this->db->where('DATE(u.created_at) = CURDATE()');
		$query = $this->db->get();
		$query->row_array();
		//echo$this->db->last_query();exit;
		return ($query->num_rows() >= 1)?$query->row_array():FALSE;
	}

	public function get_assignMent($data){
		$this->db->select('u.*');
        $this->db->from('user_quantities u');
		$this->db->where($data);
		$this->db->where('DATE(u.created_at) = CURDATE()');
		$query = $this->db->get();
		//echo$this->db->last_query();exit;
		return ($query->num_rows() >= 1)?$query->row_array():FALSE;
	}

	public function all_assingments(){
		$this->db->select('u.*,b.full_name');
        $this->db->from('user_quantities u');
        $this->db->join('users b', 'u.user_id = b.id', 'left');
		$this->db->where('DATE(u.created_at) = CURDATE()');
		$query = $this->db->get();
		
		return ($query->num_rows() >= 1)?$query->result():FALSE;
	}

	public function get_user_items($uid, $dt=null){
		$this->db->select('u.*,b.full_name');
        $this->db->from('user_quantities u');
        $this->db->join('users b', 'u.user_id = b.id', 'left');
		//$this->db->where('DATE(u.created_at) = CURDATE()');
		$this->db->where('b.id',$uid);
		$this->db->order_by('u.id','DESC');
		$query = $this->db->get();
		
		return ($query->num_rows() >= 1)?$query->result():FALSE;
	}
	
	public function _products(){
		$sql = "a.product_id IN('200','207','217','423')"; 
		$another = $this->load->database('another_db', TRUE);
		$another->select('a.*,b.*');
		$another->from('ndb_wc_product_meta_lookup a');
		$another->join('ndb_posts b','a.product_id = b.ID','left');
		$another->where('b.post_type','product');
		$another->where($sql);
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}
	
	
	public function _productDetails($id){
		$another = $this->load->database('another_db', TRUE);
		$another->select('meta_key, meta_value');
		$another->from('ndb_postmeta');
		$another->where('post_id',$id);
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function _productInfo($id){
		$another = $this->load->database('another_db', TRUE);
		$another->select('*');
		$another->from('ndb_posts');
		$another->where('ID',$id);
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}

	public function _wURL(){
		$another = $this->load->database('another_db', TRUE);
		$another->select('*');
		$another->from('ndb_options');
		$another->where('option_name','siteurl');
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}

	public function _thumbnail($id){
		$another = $this->load->database('another_db', TRUE);
		
		$sql = "SELECT p.ID, am.meta_value FROM ndb_posts p LEFT JOIN ndb_postmeta pm ON pm.post_id = p.ID AND pm.meta_key = '_thumbnail_id' LEFT JOIN ndb_postmeta am ON am.post_id = pm.meta_value AND am.meta_key = '_wp_attached_file' WHERE p.post_type = 'product' AND p.post_status = 'publish' AND p.ID = ".$id."";
		$query = $another->query($sql);
		
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}
	
	public function _remaining_product_qty(){
		
		$this->db->select('*');
		
	}
	
	public function _unitPrice($id){
		$this->db->select('*');
		$this->db->from('ndb_wc_product_meta_lookup');
		$this->db->where('product_id',$id);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}

	public function _todayZoneValue($data){
		$this->db->select('quantity');
		$this->db->from('daily_zone_quantities');
		$this->db->where($data);
		$this->db->where('DATE(created_at) = CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}

	public function _todayPendingOrders($data){
		$this->db->select('quantity');
		$this->db->from('order_deliveries');
		$this->db->where($data);
		$this->db->where('DATE(created_at) = CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
	}

	public function _dailyZoneQuantities(){
		$this->db->select('*');
		$this->db->from('daily_zone_quantities');
		//$this->db->where('DATE(created_at) = CURDATE()');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

}

?>