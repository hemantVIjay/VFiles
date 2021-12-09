<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model{
    
	public function property_details($id){
		$this->db->select('*');
        $this->db->from('properties p');
        $this->db->where('p.status','1');
        $this->db->where('p.id',$id);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->row():FALSE;
    }

	public function plot_plans($id){
		$this->db->select('pp.*');
        $this->db->from('plot_plans pp');
        $this->db->where('pp.property_id',$id);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function property_images($id){
		$this->db->select('pi.*');
        $this->db->from('properties_images pi');
		$this->db->where('pi.property_id',$id);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function floor_plans($id){
		$this->db->select('fp.*');
        $this->db->from('floor_plans fp');
		$this->db->where('fp.property_id',$id);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }


	public function _amenities($data){
		$edata = explode(',', $data);
		$this->db->select('a.name, a.icon');
        $this->db->from('amenities a');
		$this->db->where_in('a.id',$edata);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function _banks($data){
		$edata = explode(',', $data);
		$this->db->select('a.name, a.icon');
        $this->db->from('banks a');
		$this->db->where_in('a.id',$edata);
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }


	public function _searchProperties($search, $city){
		//$sql = "SELECT a.property_name as name, CONCAT('PROP','_', a.id) as val 
		//FROM properties a where a.property_name LIKE '%$search%'
	    //UNION
		//SELECT pr.project_name as name, CONCAT('PROJ','_', pr.id) as val
		//FROM projects pr where pr.project_name LIKE '%$search%'
		//UNION	
		//SELECT l.name as name,  CONCAT('BLD','_', l.id) as val 
		//FROM locations l where l.name LIKE '%$search%'
		//UNION	
		//SELECT b.builder_name as name, b.id as val
		//FROM builders b where b.builder_name LIKE '%$search%'";
		
		$sql = "SELECT pr.project_name as name, CONCAT('PROJ','_', pr.id) as val
		FROM projects pr where pr.project_name LIKE '%$search%' AND city_id = (SELECT id FROM cities where slug = '".$city."') 
		UNION	
		SELECT l.name as name, CONCAT('LOC','_', l.id) as val 
		FROM locations l where l.name LIKE '%$search%' AND city_id = (SELECT id FROM cities where slug = '".$city."')
		UNION	
		SELECT b.builder_name as name, CONCAT('BLD','_', b.id) as val
		FROM builders b where b.builder_name LIKE '%$search%'";
        $query = $this->db->query($sql);
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }


	public function _searchListing($search){
		$this->db->select('a.*');
        $this->db->from('properties a');
		$query = $this->db->get();
		//echo$this->db->last_query();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }
	
	
	public function search_properties($search){
		$this->db->select('a.*, ft.name as bd_name, bt.name as bt_name, cs.name as cs_name, lt.name as lt_name, bl.name as bl_name');
        $this->db->from('properties a');
		$this->db->join('floor_types ft','a.bedrooms = ft.id','left');
        $this->db->join('bathrooms bt','a.bathrooms = bt.id','left');
        $this->db->join('construction_status cs','a.construction_status = bt.id','left');
        $this->db->join('listing_type lt','a.property_for = lt.id','left');
        $this->db->join('balconies bl','a.balcony = bl.id','left');
        $this->db->where($search);
		$query = $this->db->get();
		//echo$this->db->last_query();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }
	
	public function create_enquiry($post_data){
        $this->_table_name='enquiries';
        $this->_timestamps=TRUE;
        //create faq caregory
        $insert_id=$this->save($data=$post_data, $id = NULL);
        if($insert_id){
                $return_data=array(
                    'status'=>TRUE,
                    'label'=>'SUCCESS',
                );
                return $return_data;
        }else{
            //if not inseted
            $return_data=array(
                'status'=>FALSE,
                'label'=>'ERROR',
            );
            return $return_data;
        }
    }

	public function save_rating($post_data){
        $this->_table_name='reviews';
        //create faq caregory
        $insert_id=$this->save($data=$post_data, $id = NULL);
        if($insert_id){
                $return_data=array(
                    'status'=>TRUE,
                    'label'=>'SUCCESS',
                );
                return $return_data;
        }else{
            //if not inseted
            $return_data=array(
                'status'=>FALSE,
                'label'=>'ERROR',
            );
            return $return_data;
        }
    }

	

}

?>