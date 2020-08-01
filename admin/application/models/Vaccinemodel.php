
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaccinemodel extends CI_Model {
	public function add_vaccine($data){
		$query 	= 	$this->db->insert('vaccine',$data);
		return true;
	}

	public function get_vaccineexistence($vacname,$vacnage){
		$this->db->where('vaccine_name',$vacname);
		$this->db->where('age',$vacnage);
    	$query=$this->db->get('vaccine');
    	$docdet = $query->result();
    	$num_rows=$query->num_rows();
    	return $num_rows;
	}

	public function getvaccinelist(){
		$query	=	$this->db->get('vaccine');
    	return $query->result();
	}

}
