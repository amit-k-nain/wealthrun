
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersmodel extends CI_Model {

	public function getusers_detail(){
    	$query = $this->db->get('users');
    	$users = $query->result();
    	return $users;
    }

    public function get_user($id){
    	$this->db->where('user_id', $id);
    	$query = $this->db->get('users');
    	return $query->result();
    }

    public function profile_update($user_id,$data){
		$this->db->where('user_id',$user_id);
		$this->db->update('users',$data);
		return true;
	}
}
