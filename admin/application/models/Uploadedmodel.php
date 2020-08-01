<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadedmodel extends CI_Model {
	
	public function getuploaded_doc(){
	    $query = $this->db->where('is_deleted !=',1)->order_by('payment_id','DESC')->get('payment');
    	return $query->result();
	}

	public function get_siblge_payment_details($pid,$user_id){
		$this->db->where('payment_id',$pid);
		$this->db->where('user_id',$user_id);
	    $query = $this->db->get('payment');
    	return $query->result();
	}

	public function get_user_docs($sid){
		$this->db->where('service_id',$sid);
	    $query = $this->db->get('documents');
    	return $query->result();
	}

	public function user_service_update($pid,$user_id,$data){
		$this->db->where('payment_id',$pid);
		$this->db->where('user_id',$user_id);
		$this->db->update('payment',$data);
		return true;
	}
}
