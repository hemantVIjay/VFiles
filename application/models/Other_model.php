<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Other_model extends MY_Model{
    
	public function get_cities(){
		$this->db->select('c.*, s.name as state');
        $this->db->from('cities c');
        $this->db->join('states s','c.state_id = s.id','left');
        $this->db->join('countries cs','s.country_id = cs.id','left');
        $this->db->where('c.status','1');
        $this->db->where('cs.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }
	
	public function get_states(){
		$this->db->select('c.*, s.name as country');
        $this->db->from('states c');
        $this->db->join('countries s','c.country_id = s.id','left');
        $this->db->where('c.status','1');
        $this->db->where('s.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function get_countries(){
		$this->db->select('c.*');
        $this->db->from('countries c');
        $this->db->where('c.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function get_localities(){
		$this->db->select('c.*');
        $this->db->from('locations c');
        $this->db->where('c.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }
	
	public function create_amenity($post_data){
        $this->_table_name='amenities';
        $this->_timestamps=TRUE;
        //create faq caregory
        $insert_id=$this->save($data=$post_data, $id = NULL);
        if($insert_id){
            //create slug
            $slug=$this->create_slug($id=$insert_id, $title=$post_data['name']);
            $update_data=array(
                'slug'=>$slug
            );
            //update faq caregory
            $update_id=$this->save($data=$update_data, $id = $insert_id);
            if($update_id){
                //if updated
                $return_data=array(
                    'status'=>TRUE,
                    'label'=>'SUCCESS',
                );
                return $return_data;
            }else{
                //if not updated
                $return_data=array(
                    'status'=>FALSE,
                    'label'=>'ERROR',
                );
                return $return_data;
            }
        }else{
            //if not inseted
            $return_data=array(
                'status'=>FALSE,
                'label'=>'ERROR',
            );
            return $return_data;
        }
    }
	
	public function delete_amenities($amenity_id,$update_data){
		$this->_table_name='amenities';
		$this->_timestamps=TRUE;
		//update Amenity
		$update_id=$this->save($data=$update_data, $id = $amenity_id);
		if($update_id){
			//if updated
			$return_data=array(
				'status'=>TRUE,
				'label'=>'SUCCESS',
			);
			return $return_data;
		}else{
			//if not updated
			$return_data=array(
				'status'=>FALSE,
				'label'=>'ERROR',
			);
			return $return_data;
		}
	}

}

?>