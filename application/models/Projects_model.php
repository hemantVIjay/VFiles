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

	public function project_Info($id){
	 $this->db->select("CONCAT(b.builder_name,' ',p.project_name,' ',l.name,' ',c.name) as project_name, p.id");
     $this->db->from('projects p');
     $this->db->join('builders b','p.builder_id = b.id','LEFT');
     $this->db->join('locations l','p.locality_id = l.id','LEFT');
     $this->db->join('cities c','p.city_id = c.id','LEFT');
     $this->db->where('p.id',$id);
	 $query = $this->db->get();
        if($query->num_rows() > 0){
            $details=$query->row();
            return $details;
        }else{
            return FALSE;
        }
	}
	
	public function get_plots($id){
	 $this->db->select("pp.*");
     $this->db->from('plot_plans pp');
     $this->db->where('pp.listing_id',$id);
	 $query = $this->db->get();
     return ($query->num_rows() > 0)?$query->result():FALSE;	
	}

	public function get_floorPlans($id){
	 $this->db->select("fp.*");
     $this->db->from('floor_plans fp');
     $this->db->where('fp.listing_id',$id);
	 $query = $this->db->get();

     return ($query->num_rows() > 0)?$query->result():FALSE;
	 
	}

	public function get_specifications($id){
	 $this->db->select("fp.*");
     $this->db->from('flat_specifications fp');
     $this->db->where('fp.listing_id',$id);
	 $query = $this->db->get();

     return ($query->num_rows() > 0)?$query->row():FALSE;
	 
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
                    'id'=>$insert_id,
                    'status'=>TRUE,
                    'label'=>'SUCCESS',
                );
                return $return_data;
            }else{
                //if not updated
                $return_data=array(
                    'id'=>'',
                    'status'=>FALSE,
                    'label'=>'ERROR',
                );
                return $return_data;
            }
        }else{
            //if not inseted
            $return_data=array(
                'id'=>'',
                'status'=>FALSE,
                'label'=>'ERROR',
            );
            return $return_data;
        }
    }


	public function update_project($project_id, $updated_data, $specs, $floorPlans){
		$this->_table_name='projects';
        $this->_timestamps=TRUE;
        $updated_id=$this->save($data=$updated_data, $id = $project_id);
		$specs['listing_id'] = $project_id;
		if($updated_id){
            //create slug
            $slug=$this->create_slug($id=$project_id, $title=$updated_data['project_name']);
            $update_data=array(
                'slug'=>$slug
            );
            //update project
            $update_id=$this->save($data=$update_data, $id = $project_id);
			if(!empty($specs)){
			  $this->update_specifications($specs, $project_id);
			}
			if(!empty($floorPlans)){
			  $this->update_FloorPlans($floorPlans, $project_id);
			}			
            if($update_id){
                //if updated
                $return_data=array(
                    'id'=>$project_id,
                    'status'=>TRUE,
                    'label'=>'SUCCESS',
                );
                return $return_data;
            }else{
                //if not updated
                $return_data=array(
                    'id'=>'',
                    'status'=>FALSE,
                    'label'=>'ERROR',
                );
                return $return_data;
            }
        }else{
            //if not inseted
            $return_data=array(
                'id'=>'',
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

	public function update_specifications($post_data, $project_id){
		
		$this->db->trans_start();
		$this->db->where('listing_id', $project_id);
		$this->db->delete('flat_specifications');
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		}else{
			$this->db->trans_commit();
		}
		
		$this->_table_name='flat_specifications';
        $this->_timestamps=TRUE;
        $insert_id=$this->save($data=$post_data, $id = NULL);
        return true;		
	}


	public function save_FloorPlans($post_data, $id){
		/*$this->db->trans_start();
		$this->db->where('listing_id', $id);
		$this->db->delete('floor_plans');
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		}else{
			$this->db->trans_commit();
		}*/
		$mData = array();
		foreach($post_data as $key=>$data){
			$sdata['floor_totalRoomSizes'] = $data[$key]['floor_totalRoomSizes'];
			$sdata['floor_size'] = $data[$key]['floor_size'];
			$sdata['floor_roomDesc'] = $data[$key]['floor_roomDesc'];
			$sdata['floor_bedrooms'] = $data[$key]['floor_bedrooms'];
			$sdata['floor_bathrooms'] = $data[$key]['floor_bathrooms'];
			$sdata['floor_unit'] = $data[$key]['floor_unit'];
			$sdata['floor_size'] = $data[$key]['floor_size'];
			$sdata['floor_builtupArea'] = $data[$key]['floor_builtupArea'];
			$sdata['floor_basePrice'] = $data[$key]['floor_basePrice'];
			$sdata['floor_totalPrice'] = $data[$key]['floor_totalPrice'];
			$sdata['listing_id'] = $id;
            $mData[] = $sdata;
		}
        $this->db->insert_batch('floor_plans', $mData);
        $this->db->insert_batch('floor_plan_revisions', $mData);
        return true;		
	}

	public function update_FloorPlans($post_data, $id){
		$this->db->trans_start();
		$this->db->where('listing_id', $id);
		$this->db->delete('floor_plans');
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		}else{
			$this->db->trans_commit();
		}
		$mData = array();
		foreach($post_data as $key=>$data){
			$sdata['floor_totalRoomSizes'] = $data[$key]['floor_totalRoomSizes'];
			$sdata['floor_size'] = $data[$key]['floor_size'];
			$sdata['floor_roomDesc'] = $data[$key]['floor_roomDesc'];
			$sdata['floor_bedrooms'] = $data[$key]['floor_bedrooms'];
			$sdata['floor_bathrooms'] = $data[$key]['floor_bathrooms'];
			$sdata['floor_unit'] = $data[$key]['floor_unit'];
			$sdata['floor_size'] = $data[$key]['floor_size'];
			$sdata['floor_builtupArea'] = $data[$key]['floor_builtupArea'];
			$sdata['floor_basePrice'] = $data[$key]['floor_basePrice'];
			$sdata['floor_totalPrice'] = $data[$key]['floor_totalPrice'];
			$sdata['listing_id'] = $id;
            $mData[] = $sdata;
		}
        $this->db->insert_batch('floor_plans', $mData);
        $this->db->insert_batch('floor_plan_revisions', $mData);
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