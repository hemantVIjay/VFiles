<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localities extends MY_Controller {
    function __construct(){
        parent::__construct();
        //check if backend login
        $this->is_admin_login();
        
    }
    //list localities
	
	public function list_localities()
	{
        $data['title']=$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        if($this->permitted('list_articles')){
			$localities = $this->other_model->get_Localities($id);
            $data['Localities']=$localities;
            $data['sub_view'] = $this->load->view('admin/Localities/list_Localities', $data, TRUE);
        }else{
            $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        }
        $this->load->view('admin/_layout', $data); 
    }

	public function add_localities()
	{
		$post_data = array(
          'name' => $this->input->post('amenity_name'),
          'created_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/localities/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['amenity_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('amenity_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->localities_model->create_amenity($post_data);
        redirect('admin/localities/list_localities','refresh');
    }
	
	public function edit_localities()
	{
		$post_data = array(
          'name' => $this->input->post('amenity_name'),
          'updated_by' => $this->get_user_id()
        );
                    //upload config
                    $config['upload_path'] = 'uploads/localities/';
                    $config['allowed_types'] = '*';
                    $config['encrypt_name'] = TRUE;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '1024'; //1 MB
                    //Upload Category Icon
                    if(isset($_FILES['amenity_icon']['name'])){
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('amenity_icon')) {
                            $success = FALSE;
                            $message = $this->upload->display_errors();
                            $json_array = array('success' => $success, 'message' => $message);
                            echo json_encode($json_array);
                            exit();
                        } else {
                            $upload_data=$this->upload->data();
                            $post_data['icon']=$upload_data['file_name'];
                        }
                    }
                    //XXS Clean
                    $post_data = $this->security->xss_clean($post_data);
                    $result = $this->localities_model->create_amenity($post_data);
        redirect('admin/localities/list_localities','refresh');
    }
	
	
	public function delete_localities()
	{
        $id = $this->uri->segment(4);
		if(isset($id)){
            //check permission
            if($this->permitted('delete_article')){
                $data['title']=$this->lang->line("text_delete_article");
                $post_data = array(
				  'status' => 0,
				  'updated_by' => $this->get_user_id()
				);
				$res = $this->localities_model->delete_localities($id, $post_data);
				redirect('admin/localities/list_localities','refresh');
            }else{
                $data['title']=$this->lang->line("alert_access_denied");
                $success = TRUE;
                $message = '';
                $content = $this->load->view('errors/permission/denied',$data,TRUE);
            }
            $json_array = array('success' => $success, 'message' => $message,'content'=>$content);
            echo json_encode($json_array);
            exit();
        }
    }
	
}