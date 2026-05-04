<?php defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->model('Account_model');
        
        // Check if user is logged in
        if(!$this->session->userdata('user')) {
            redirect('admin/login');
        }
    }
	 public function dashboard() {
        $data['title'] = 'Dashboard';
        $data['total_alumni'] = $this->Account_model->getTotalAlumni();
        $data['recent_alumni'] = $this->Account_model->getRecentAlumni(5);
        $data['year_wise'] = $this->Account_model->getYearWiseCount();
        
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template/footer');
    }
    
    public function alumni() {
        $data['title'] = 'Alumni Management';
        $data['alumni_list'] = $this->Account_model->getAlumni();
        
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/alumni', $data);
        $this->load->view('admin/template/footer');
    }
    
    public function add_alumni() {
        if($this->input->post()) {
            $alumni_data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'gender' => $this->input->post('gender'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'graduation_year' => $this->input->post('graduation_year'),
                'degree' => $this->input->post('degree'),
                'branch' => $this->input->post('branch'),
                'current_company' => $this->input->post('current_company'),
                'designation' => $this->input->post('designation'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'linkedin_url' => $this->input->post('linkedin_url')
            );
            
            if($this->Account_model->addAlumni($alumni_data)) {
                $this->session->set_flashdata('success', 'Alumni added successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to add alumni!');
            }
            redirect('admin/alumni');
        }
    }
    
    public function edit_alumni($id) {
        if($this->input->post()) {
            $alumni_data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'gender' => $this->input->post('gender'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'graduation_year' => $this->input->post('graduation_year'),
                'degree' => $this->input->post('degree'),
                'branch' => $this->input->post('branch'),
                'current_company' => $this->input->post('current_company'),
                'designation' => $this->input->post('designation'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'linkedin_url' => $this->input->post('linkedin_url')
            );
            
            if($this->Account_model->updateAlumni($id, $alumni_data)) {
                $this->session->set_flashdata('success', 'Alumni updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update alumni!');
            }
            redirect('admin/alumni');
        }
        
        $data['title'] = 'Edit Alumni';
        $data['alumni'] = $this->Account_model->getAlumni($id);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/edit_alumni', $data);
        $this->load->view('admin/template/footer');
    }
    
    public function delete_alumni($id) {
        if($this->Account_model->deleteAlumni($id)) {
            $this->session->set_flashdata('success', 'Alumni deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete alumni!');
        }
        redirect('admin/alumni');
    }
    
    public function get_alumni_data() {
        $alumni = $this->Account_model->getAlumni();
        echo json_encode(['data' => $alumni]);
    }
}  ?>
