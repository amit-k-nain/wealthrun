<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedulemodel extends CI_Model {
	public function getdoctor_bydept($dptid){
		$this->db->where('status',1);
		$this->db->where('dept_id',$dptid);
    	$query=$this->db->get('doctors');
    	$docdet = $query->result();
    	$num_rows=$query->num_rows();

    	if($num_rows > 0){ 
        	echo '<option value="">Select Doctor</option>'; 
        	foreach ($docdet as $doccdet) {
        		echo '<option value="'.$doccdet->doc_id.'">'.$doccdet->doc_name.'</option>';
        	}
    	}
    	else{ 
        	echo '<option value="">Doctor not available</option>'; 
        	return true;
    	} 
	}

	public function getscheduleddoctor(){
		$query	=	$this->db->get('doctor_schedule');
    	return $query->result();
	}

	public function get_doctor_schedule($docid){
		$this->db->where('doc_id',$docid);
    	$query = $this->db->get('doctor_schedule');
    	$result = $query->num_rows();
    	return $result;
	}

	public function add_doctor_schedule($data){
		$query 	= 	$this->db->insert('doctor_schedule',$data);
		return true;
	}

	public function update_doctor_schedule($data,$docid){
		$this->db->where('doc_id', $docid);
		$query = $this->db->update('doctor_schedule', $data);
		return true;
	}

}
