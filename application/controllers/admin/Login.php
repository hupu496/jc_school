<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('Account_model');
	}
   
	public function index() {
        if($this->session->userdata('user')) {
            redirect('admin/dashboard');
        }
        $this->load->view('admin/service/login');
    }
    
    public function validatelogin() {
        $data = $this->input->post();
       
        if(empty($data['username']) || empty($data['password'])) {
            
            $this->session->set_flashdata('logerr', 'Please enter username and password!');
            redirect('login');
        }
        
        $result = $this->Account_model->login($data);
        
        if($result['verify'] === true) {
            $session_data = array(
                'user' => $result['user_data']['id'],
                'username' => $result['user_data']['username'],
                'email' => $result['user_data']['email'],
                'role' => $result['user_data']['role'],
                'logged_in' => true
            );
            $this->session->set_userdata($session_data);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('logerr', $result['verify']);
            redirect('login');
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>