<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_model extends MY_Model{
    
		public function get_allprojects($params = array()){
		$this->db->select('c.*');
        $this->db->from('projects c');
        $this->db->where('c.status','1');

        if(!empty($params['search']['keyword'])){
            $this->db->where("(
                c.name LIKE '%".$params['search']['keyword']."%'             
            )");
        }
        //filter data by searched status
        if(!empty($params['search']['status'])){
            $this->db->where('c.status', $status);
        }
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        if(array_key_exists("keep_order",$params)){
            if($params['keep_order']==TRUE){
                $this->db->order_by("c.ordering","asc");
            }
        }else{
            $this->db->order_by("c.id","desc");
        }
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $cities=$query->result();
            return $cities;
        }else{
            return FALSE;
        }
    }
	
	public function projectDetails($id){
	 $this->db->select('c.*');
     $this->db->from('projects c');
     $this->db->where('c.id',$id);
	 $query = $this->db->get();
        if($query->num_rows() > 0){
            $details=$query->row();
            return $details;
        }else{
            return FALSE;
        }	
		
	}
	
		//get user by id
	public function get_projectProperties($id){
		$this->db->select('a.*, ft.name as bd_name, bt.name as bt_name, cs.name as cs_name, lt.name as lt_name, bl.name as bl_name');
        $this->db->from('properties a');
		$this->db->join('floor_types ft','a.bedrooms = ft.id','left');
        $this->db->join('bathrooms bt','a.bathrooms = bt.id','left');
        $this->db->join('construction_status cs','a.construction_status = cs.id','left');
        $this->db->join('listing_type lt','a.property_for = lt.id','left');
        $this->db->join('balconies bl','a.balcony = bl.id','left');
		$this->db->where('a.project', $id);
		$query = $this->db->get();

		return ($query->num_rows() > 0)?$query->result():FALSE;
	}

	public function get_projectPlans($id){
		$this->db->select('a.*');
        $this->db->from('floor_plans a');
		$this->db->where('a.listing_id', $id);
		$query = $this->db->get();

		return ($query->num_rows() > 0)?$query->result():FALSE;
	}
	
	public function create_project($post_data, $specs, $floorPlans){
        $this->_table_name='projects';
        $this->_timestamps=TRUE;
        $insert_id=$this->save($data=$post_data, $id = NULL);
		$specs['listing_id'] = $insert_id;
		if($insert_id){
            //create slug
            $slug=$this->create_slug($id=$insert_id, $title=$post_data['project_name']);
            $update_data=array(
                'slug'=>$slug
            );
            //update project
            $update_id=$this->save($data=$update_data, $id = $insert_id);
			if(!empty($specs)){
			  $this->create_specifications($specs);
			}
			if(!empty($floorPlans)){
			  $this->save_FloorPlans($floorPlans, $insert_id);
			}			
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
	
	public function create_specifications($post_data){
		$this->_table_name='flat_specifications';
        $this->_timestamps=TRUE;
        $insert_id=$this->save($data=$post_data, $id = NULL);
        return true;		
	}


	public function save_FloorPlans($post_data, $id){
		$mData = array();
		foreach($post_data as $key=>$data){
			$sdata['floor_type'] = $data[$key]['floor_type'];
			$sdata['floor_size'] = $data[$key]['floor_size'];
			$sdata['floor_basePrice'] = $data[$key]['floor_basePrice'];
			$sdata['floor_planImage'] = $data[$key]['floor_planImage'];
			$sdata['floor_totalPrice'] = $data[$key]['floor_totalPrice'];
			$sdata['floor_toilets'] = $data[$key]['floor_toilets'];
			$sdata['listing_id'] = $id;
            $mData[$key] = $sdata;
		}
        $this->db->insert_batch('floor_plans', $mData);
        return true;		
	}
	
	public function delete_project($id,$update_data){
		$this->_table_name='projects';
		$this->_timestamps=TRUE;
		//update Amenity
		$update_id=$this->save($data=$update_data, $id = $id);
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