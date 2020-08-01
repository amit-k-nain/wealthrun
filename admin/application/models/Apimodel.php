
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apimodel extends CI_Model {
	public function signup_users($data){
		$query  =   $this->db->insert('users',$data);
        return true;
	}	

    public function get_users($usercon){
        $this->db->where('contact', $usercon);
        $query = $this->db->get('users');
        return $query->num_rows();
    }

    public function get_user_profile($iuserid){
        $this->db->where('user_id', $iuserid);
        $query = $this->db->get('users');
        return $query->num_rows();
    }
    
    public function update_user_profile($iuserid,$data){
        $this->db->where('user_id', $iuserid);
        $this->db->update('users', $data);
        return true;
    }

	public function getloggedin_users($email,$pass){
		$this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        return $query->num_rows();
	}

	public function getdoctor_bydept($deptid){
		$this->db->where('status',1);
		$this->db->where('dept_id',$deptid);
    	$query=$this->db->get('doctors');
    	$docdet = $query->result();
    	return $docdet;
    }

    public function getdoctorschedule_byday($day,$docid){
		$this->db->where('doc_id', $docid);
		$this->db->where_in('working_days', $day);
		$query = $this->db->get('doctor_schedule');
		$result = $query->num_rows();
    	return $result;
	}	

	public function getdoctorschedule_bytime($docid){
		$this->db->where('doc_id',$docid);
    	$query = $this->db->get('doctor_schedule');
    	$doctim = $query->result();
    	return $doctim;
    }

    public function add_userschild($data){
    	$query  =   $this->db->insert('userschild',$data);
        return true;
    }

    public function getuserchildlist($user_id){
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('userschild');
        $userchild = $query->result();
        return $userchild;
    }

    public function insert_sentchatbyuser($data){
        $query  =   $this->db->insert('ask_reply',$data);
        return true;
    }

    public function get_user_chats($user_id){
        $this->db->select('*');
        $this->db->where('sent_by', $user_id);
        $this->db->or_where('sent_to', $user_id);
        $query = $this->db->get('ask_reply');
        return $query->result();
    }
}
