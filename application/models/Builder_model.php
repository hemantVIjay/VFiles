<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Builder_model extends MY_Model{

	public function get_all_builders(){
		
    	$this->db->select('b.*');
        $this->db->from('builders b');
        $this->db->where('b.status','1');
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result():FALSE;
	
	}
	//get all builders
	public function get_builders($params = array()){
		$this->db->select('u.*,r.role_name,r.role_slug');
        $this->db->from('builders u');
		$this->db->join('builders_roles r', 'r.id = u.user_role_id', 'inner');

		//filter data by searched keyword
        if(!empty($params['search']['keyword'])){
            $this->db->like('u.full_name', $params['search']['keyword']);
        }
        //filter data by searched user type
        if(!empty($params['search']['user_type'])){
            $this->db->where('u.user_role_id', $params['search']['user_type']);
        }
        //filter data by searched status
        if(!empty($params['search']['status'])){
            if($params['search']['status']=='INACTIVE'){
                $status=0;
            }elseif($params['search']['status']=='ACTIVE'){
                $status=1;
            }elseif($params['search']['status']=='BLOCKED'){
                $status=2;
            }
            $this->db->where('u.status', $status);
		}
		if(array_key_exists("exclued",$params)){
			$this->db->where('u.id !=', $params['exclued']);
		}
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
		$query = $this->db->get();
		//return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
	}

	
	//create new user
	public function create_builder($post_data){
		$this->_table_name='builders';
		//check user with mail exist
		$condition=array('builder_name'=>$post_data['builder_name']);
		$record=$this->get_by($where=$condition, $single = TRUE, $AsOrder = "asc", $limit= NULL, $pageNumber=0);
		if(isset($record) && $record!=NULL){
			//user already exist
			$return_data=array(
				'status'=>FALSE,
				'label'=>'EXIST',
			);
			return $return_data;
		}else{
			//user not exist
			$this->_table_name='builders';
			$this->_timestamps=TRUE;
			//create user
			$insert_id=$this->save($data=$post_data, $id = NULL);
			if($insert_id){
				//if inserted
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

	//update user
	public function update_builder($user_id,$update_data){
		$this->_table_name='builders';
		$this->_timestamps=TRUE;
		//update user
		$update_id=$this->save($data=$update_data, $id = $user_id);
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

	//delete user
	public function delete_builder($user_id){
		$this->db->trans_start();
		//get user to unlink profile image
		$user=$this->get_builder($user_id);
		if($user){
			if($user['profile_image']!=NULL){
				@unlink(FCPATH.'uploads/builders/'.$user['profile_image']);
			}
		}
		//delete user
		$this->db->where('id', $user_id);
        $this->db->limit(1);
		$this->db->delete('builders');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            //if not deleted
			$return_data=array(
				'status'=>FALSE,
				'label'=>'ERROR',
			);
			return $return_data;
        }else{
			$this->db->trans_commit();
			
            //if deleted
			$return_data=array(
				'status'=>TRUE,
				'label'=>'SUCCESS',
			);
			return $return_data;
        }
	}
}

?>