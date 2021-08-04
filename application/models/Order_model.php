<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends MY_Model{
	
	//get all user types
	public function get_user_types(){
		$this->_table_name='users_roles';
		$result=$this->get($id = NULL, $single = FALSE, $AsOrder = "asc", $limit= NULL, $pageNumber=0);
		return $result;
	}
	
	public function get_all_orders($curdate = null){
		$another = $this->load->database('another_db', TRUE);
		if($curdate !=''){
			$cond = ' AND p.post_date >= CURDATE()';
		}else{
			$cond = '';
		}
		
		$sql = "SELECT p.ID AS 'order_id', p.post_date AS 'purchase_date', MAX( CASE WHEN pm.meta_key = '_billing_email'       AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'email', MAX( CASE WHEN pm.meta_key = '_billing_first_name'  AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'first_name', MAX( CASE WHEN pm.meta_key = '_billing_last_name'   AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'last_name', MAX( CASE WHEN pm.meta_key = '_billing_address_1'   AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'address', MAX( CASE WHEN pm.meta_key = '_billing_city'        AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'City', MAX( CASE WHEN pm.meta_key = '_billing_state'       AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'State', MAX( CASE WHEN pm.meta_key = '_billing_postcode'    AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'pincode', CASE p.post_status WHEN 'wc-pending' THEN 'Pending Payment' WHEN 'wc-processing' THEN 'Processing' WHEN 'wc-on-hold' THEN 'On Hold' WHEN 'wc-completed'  THEN 'Completed' WHEN 'wc-cancelled'  THEN 'Cancelled' WHEN 'wc-refunded' THEN 'Refunded' WHEN 'wc-failed' THEN 'Failed' ELSE 'Unknown' END AS 'p_status', MAX( CASE WHEN pm.meta_key = '_order_total' AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'order_total', MAX( CASE WHEN pm.meta_key = '_paid_date' AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'Paid Date', ( SELECT GROUP_CONCAT(CONCAT(m.meta_value, ' x ', i.order_item_name) separator '</p>' ) FROM ndb_woocommerce_order_items i JOIN ndb_woocommerce_order_itemmeta m ON i.order_item_id = m.order_item_id AND meta_key = '_qty' WHERE i.order_id = p.ID AND i.order_item_type = 'line_item') AS 'Items Ordered', MAX( CASE WHEN pm.meta_key = 'post_excerpt'  AND p.ID = pm.post_id THEN pm.meta_value END ) AS 'User Comments' FROM  ndb_posts AS p JOIN  ndb_postmeta AS pm ON p.ID = pm.post_id JOIN  ndb_woocommerce_order_items AS oi ON p.ID = oi.order_id WHERE post_type = 'shop_order' ".$cond." GROUP BY p.ID";
		
		//$another->select('r.*, c.*, d.*');
		//$another->from('ndb_wc_order_product_lookup r');
		//$another->join('ndb_wc_customer_lookup c', 'r.customer_id = c.customer_id', 'left');
		//$another->join('ndb_wc_order_stats d', 'r.order_id = d.order_id', 'left');
		//$another->group_by('r.order_id');
		//$another->join('ndb_woocommerce_order_items i', 'r.order_id = i.order_id', 'left');
		//$another->join('`ndb_woocommerce_order_itemmeta it', 'r.order_id = it.order_id', 'left');
		//$another->join('`ndb_wc_product_meta_lookup l', 'r.order_id = l.order_id', 'left');
		$query = $another->query($sql);
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function _orderDetails($id){
		$another = $this->load->database('another_db', TRUE);
		$another->select('meta_key, meta_value');
		$another->from('ndb_postmeta');
		$another->where('post_id',$id);
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}
	
	public function _customers(){
				
		$another = $this->load->database('another_db', TRUE);
		$another->select('a.*,b.*');
		$another->from('ndb_wc_customer_lookup a');
		$another->join('ndb_posts b','a.customer_id = b.ID','left');
		$another->where('b.post_type','customer');
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function _customerDetails($id){
		$another = $this->load->database('another_db', TRUE);
		$another->select('meta_key, meta_value');
		$another->from('ndb_postmeta');
		$another->where('post_id',$id);
		$query = $another->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function _orderItems($id){
		$another = $this->load->database('another_db', TRUE);
		$another->select('r.*, d.*, p.*');
		$another->from('ndb_wc_order_product_lookup r');
		$another->join('ndb_wc_product_meta_lookup d', 'r.product_id = d.product_id', 'left');
		$another->join('ndb_posts p', 'r.product_id = p.ID', 'left');
		$another->where('r.order_id', $id);
		$query = $another->get();
		//echo$another->last_query();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}


	public function _norderItems($id){
		$sql = "select
				p.order_id,
				p.order_item_id,
				p.order_item_name,
				p.order_item_type,
				max( CASE WHEN pm.meta_key = '_product_id' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as productID,
				max( CASE WHEN pm.meta_key = '_qty' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as Qty,
				max( CASE WHEN pm.meta_key = '_variation_id' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as variationID,
				max( CASE WHEN pm.meta_key = '_line_total' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as lineTotal,
				max( CASE WHEN pm.meta_key = '_line_subtotal_tax' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as subTotalTax,
				max( CASE WHEN pm.meta_key = '_line_tax' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as Tax,
				max( CASE WHEN pm.meta_key = '_tax_class' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as taxClass,
				max( CASE WHEN pm.meta_key = '_line_subtotal' and p.order_item_id = pm.order_item_id THEN pm.meta_value END ) as subtotal
				from
				ndb_woocommerce_order_items as p,
				ndb_woocommerce_order_itemmeta as pm
				 where order_item_type = 'line_item' and
				 p.order_item_id = pm.order_item_id and p.order_id = ".$id."
				 group by
				p.order_item_id";
				
		$query = $this->db->query($sql);
		//echo$another->last_query();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function _orders(){
		$another = $this->load->database('another_db', TRUE);
		$another->select('r.*, p.*');
		$another->from('ndb_woocommerce_order_items r');
		//$another->join('ndb_wc_product_meta_lookup d', 'r.product_id = d.product_id', 'left');
		$another->join('ndb_posts p', 'r.order_id = p.ID', 'left');
		$another->where('r.order_item_type', 'line_item');
		$query = $another->get();
		//echo$another->last_query();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	}

}

?>