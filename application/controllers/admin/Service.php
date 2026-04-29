<?php defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Services";
		$data['breadcrumb'] = array('admin/service' =>'Dashboard');
 		//print_r($roles);die;
		$this->template->load('admin/service','add',$data);
	}

	
	public function insert_service(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/service/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  }
		unset($data['addservice']);
		$result = $this->Service_model->insert_service($data);
		if($result === true){
			$this->session->set_flashdata('msg',"Service Created Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/servilist');
	}
	public function service_edit(){
		$editid = $this->uri->segment('4');
	
		$where=array('id'=>$editid,'status'=>'1');
	    $data['edit_list'] = $this->Service_model->get_service($where,'single');
	   
		$this->template->load('admin/service','edit',$data);
	}

}	
