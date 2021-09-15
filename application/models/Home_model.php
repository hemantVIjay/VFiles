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

	

}

?>