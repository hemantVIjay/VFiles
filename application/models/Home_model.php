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


	public function _searchProperties($data){
		$this->db->select('a.property_name as name, a.id as val, pr.project_name as name, pr.id as val, l.name as name, l.id as val, b.builder_name as name, b.id as val');
        $this->db->from('properties ps');
        $this->db->join('properties a','ps.id = a.id','inner');
        $this->db->join('projects pr','a.project = pr.id','right');
        $this->db->join('locations l','a.locality = l.id','right');
        $this->db->join('builders b','a.builder_id = b.id','right');
		$this->db->like('a.property_name',$data);
		$this->db->or_like('a.property_name',$data);
		$this->db->or_like('pr.project_name',$data);
		$this->db->or_like('l.name',$data);
		$this->db->or_like('b.builder_name',$data);
		$query = $this->db->get();
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