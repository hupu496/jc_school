<?php
class Homeservice_model extends CI_Model{
	
	
	function __construct(){
		parent::__construct(); 
		$this->load->helper('string');
	}
	
	public function register_user_model($data){
		$table="user_register";  
		$salt=random_string('alnum', 8);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['salt'] = $salt;
    $data['cpassword'] = $password;
    $data['added_on'] = date("Y-m-d");
    $login = $this->db->get_where('user_register',array('phone'=>$data['phone'],'email'=>$data['email']))->num_rows();
     if($login>0){
     	return false;
     }else{
     	 	$status=$this->db->insert($table,$data);
     	 	$last_id = $this->db->insert_id();
     	 	$query = $this->db->insert('login',array('email'=>$data['email'],'password'=>$data['cpassword'],'register_id'=>$last_id,'salt'=>$data['salt'],'added_on'=>date('Y-m-d H:i:s')));
    if($status == true && $query == true){
			return true;
		}
		else{
			return false;
		}
     }
		
		
	}
}?>