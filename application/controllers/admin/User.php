<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
	}
    //login to account
	public function login()
	{
		
        if($this->input->post()){
            $this->form_validation->set_rules('email','email','trim|required|valid_email' );
			$this->form_validation->set_rules('password','password','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$success = FALSE;
                $message = validation_errors();

			}else{
				$post_data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'remember' => (bool)$this->input->post('remember'),
					'is_site_login' => FALSE
					
				);
				//XXS Clean
				$post_data = $this->security->xss_clean($post_data);
				$result = $this->auth_model->login($post_data);
				if ($result['status']==TRUE &&$result['label']=='SUCCESS') {
					$login_data = array(
						'user_id' => $result['user']['id'],
						'email' => $result['user']['email'], 
						'user_role' => $result['user']['role_name'],
						'user_role_slug' => $result['user']['role_slug'],
						'is_admin_login' => TRUE,
						'is_site_login' => FALSE
					);
					if ($post_data['remember']==TRUE) {
						// Set remember me value in session
						$this->session->set_userdata('remember_me', TRUE);
					}
					//set session
					$this->session->set_userdata('login', $login_data);
					//update login info
					$this->update_login_info($result['user']['id']);
					$success = TRUE;
                	$message = $this->lang->line("alert_login_success");
				}elseif($result['status']==FALSE &&$result['label']=='INACTIVE'){
					$success = FALSE;
                	$message = $this->lang->line("alert_login_inactive");
				}elseif($result['status']==FALSE &&$result['label']=='ERROR'){
					$success = FALSE;
                	$message = $this->lang->line("alert_login_invalid");
				}elseif($result['status']==FALSE &&$result['label']=='BLOCKED'){
					$success = FALSE;
                	$message = $this->lang->line("alert_user_blocked");
				}elseif($result['status']==FALSE &&$result['label']=='INVALID'){
					$success = FALSE;
                	$message = $this->lang->line("alert_user_notfound");
				}
            }
            $json_array = array('success' => $success, 'message' => $message);
            echo json_encode($json_array);
            exit();
		}
		$session_data = $this->session->all_userdata();
		if (isset($session_data['remember_me']) && $session_data['remember_me'] == TRUE) {
			//redirect to dashboard
			redirect('admin', 'refresh');
		}else{
			$data['title']='Login';
        	$this->load->view('admin/auth/login', $data); 
		}
		
	}

	public function amenities()
	{
		$data['title']= 'text_locations';//$this->lang->line("text_locations");
		$id = $this->uri->segment(4);
        $data['sub_view'] = $this->load->view('errors/permission/denied', $data, TRUE);
        $this->load->view('admin/_layout', $data); 
	}

	public function cities()
	{
		$this->load->view('admin/auth/login');
	}

	public function states()
	{
		$this->load->view('admin/auth/login');
	}
}
