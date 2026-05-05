<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function login($data) {
		
        $this->db->where('username', $data['username']);
        $query = $this->db->get('users');
       
        if($query->num_rows() > 0) {
            $user = $query->row_array();
			 
            if($data['password'] == $user['password']) {
				
                return array(
                    'verify' => true,
                    'user_data' => $user
                );
            } else {
                return array(
                    'verify' => 'Invalid password!'
                );
            }
        } else {
            return array(
                'verify' => 'Username not found!'
            );
        }
    }
    
    public function getAlumni($id = null) {
        if($id) {
            $this->db->where('id', $id);
            return $this->db->get('alumini')->row_array();
        }
        $this->db->order_by('id', 'DESC');
        return $this->db->get('alumini')->result_array();
    }
    
    public function addAlumni($data) {
        $data['alumni_id'] = 'AL-' . date('Y') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        return $this->db->insert('alumini', $data);
    }
    
    public function updateAlumni($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('alumini', $data);
    }
    
    public function deleteAlumni($id) {
        $this->db->where('id', $id);
        return $this->db->delete('alumini');
    }
    
    public function getTotalAlumni() {
        return $this->db->count_all('alumini');
    }
    
    public function getRecentAlumni($limit = 5) {
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        return $this->db->get('alumini')->result_array();
    }
    
    public function getYearWiseCount() {
        $this->db->select('batch, COUNT(*) as count');
        $this->db->group_by('batch');
        $this->db->order_by('batch', 'DESC');
        return $this->db->get('alumini')->result_array();
    }
}
?>