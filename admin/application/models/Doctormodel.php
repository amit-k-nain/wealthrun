<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctormodel extends CI_Model {
	public function add_doctor($data){
		$query 	= 	$this->db->insert('doctors',$data);
		return true;
	}

	public function getdoctor(){
		$query	=	$this->db->get('doctors');
    	return $query->result();
	}
}
