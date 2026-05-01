<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Homeservice extends CI_Controller {

	function __construct(){
	   parent::__construct();
	  $this->load->library('template');
	}
    	public function index()
	{   
		$data['title']="Home";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/index',$data);
        $this->load->view('website/footer');
	}
    public function aboutus(){
        $data['title'] = "About Us";
        $data['aboutus'] = $this->db->get_where('about')->result_array();
        $this->load->view('website/top-section');
        $this->load->view('website/abouts');
        $this->load->view('website/footer');
    }
	public function officemember($role = null){
    $data['title'] = "Office Member";
    $data['aboutus'] = $this->db->get_where('about')->result_array();
    $data['role'] = $role; // 'president', 'principal', or 'secretary'
    $this->load->view('website/top-section');
    $this->load->view('website/office_member', $data);
    $this->load->view('website/footer');
}
public function admission_guide(){
    $data['title'] = "Admission Guide";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/admission_guide',$data);
    $this->load->view('website/footer');
}
public function displine(){
    $data['title'] = "Displine";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/displine',$data);
    $this->load->view('website/footer');
}
public function guideline($role = null){
    $data['title'] = "Guideline";
    $data['role'] = $role;
    $this->load->view('website/top-section',$data);
    $this->load->view('website/guideline',$data);
    $this->load->view('website/footer');
}
public function holiday_list(){
    $data['title'] = "Holiday List";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/holiday_list',$data);
    $this->load->view('website/footer');
}
public function alumini(){
    $data['title'] = "Alumini";
    $this->load->view('website/top-section',$data);
    $data['alumini'] = $this->db->get_where('alumini')->result_array();
    $this->load->view('website/alumini',$data);
    $this->load->view('website/footer');
}
public function save_alumini()
{
    $data = [
        'name'       => $this->input->post('name'),
        'phone_no'   => $this->input->post('phone'),
        'email'      => $this->input->post('email'),
        'address'    => $this->input->post('address'),
        'city'       => $this->input->post('city'),
        'state'      => $this->input->post('state'),
        'batch'      => $this->input->post('batch'),
        'profession' => $this->input->post('profession'),
        'added_on'   => date('Y-m-d H:i:s'),
        'status'     => 1
    ];

    $insert = $this->db->insert('alumini', $data);

    if ($insert) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
public function get_alumini()
{
    $search = $this->input->get('search');
    $batch  = $this->input->get('batch');

    $this->db->from('alumini');
    $this->db->where('status', 1);

    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('name', $search);
        $this->db->or_like('city', $search);
        $this->db->or_like('profession', $search);
        $this->db->or_like('email', $search);
        $this->db->group_end();
    }

    if (!empty($batch) && $batch != 'all') {
        $this->db->where('batch', $batch);
    }

    $this->db->order_by('id', 'DESC');

    $result = $this->db->get()->result_array();

    echo json_encode($result);
}

public function gallery(){
    $data['title'] = "Event Gallery List";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/gallery',$data);
    $this->load->view('website/footer');
}
public function affiliation(){
    $data['title'] = "Affiliation";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/affiliation',$data);
    $this->load->view('website/footer');
}
public function achievements($role = null){
    $data['title'] = "achievements";
    $data['role'] = $role;
    $this->load->view('website/top-section',$data);
    $this->load->view('website/achievements',$data);
    $this->load->view('website/footer');
}
public function registration(){
    $data['title'] = "Registration Form";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/registration',$data);
    $this->load->view('website/footer');
}
public function fee_stru(){
    $data['title'] = "Registration Form";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/fee_structure',$data);
    $this->load->view('website/footer');
}
public function admission_period(){
    $data['title'] = "Registration Form";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/admission_period',$data);
    $this->load->view('website/footer');
}
}
?>