<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Masters_model extends MY_Model{
    
	public function get_banks(){
		$this->db->select('c.*');
        $this->db->from('banks c');
        $this->db->where('c.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

	public function get_propertyTypes(){
		$this->db->select('c.*');
        $this->db->from('property_types c');
        $this->db->where('c.status','1');
        $this->db->group_by('c.id');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }
	
	public function create_bank($post_data){
        $this->_table_name='banks';
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

	public function create_locality($post_data){
        $this->_table_name='locations';
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

	public function create_propertyType($post_data){
        $this->_table_name='property_types';
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