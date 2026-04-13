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

}
?>