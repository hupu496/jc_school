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
    $data['title'] = "Holiday List";
    $this->load->view('website/top-section',$data);
    $this->load->view('website/alumini',$data);
    $this->load->view('website/footer');
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
}
?>