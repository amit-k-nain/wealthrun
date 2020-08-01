<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointmentmodel extends CI_Model {
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
    	$num_rows=$query->num_rows();

    	if($num_rows > 0){ 
        	echo '<option value="">Select Appointment Time</option>'; 
        	foreach ($doctim as $doctiming) {
        		echo '<option value="'.$doctiming->start_at.' to '.$doctiming->end_at.'">'.$doctiming->start_at.' to '.$doctiming->end_at.'</option>';
        	}
    	}
    	else{ 
        	echo '<option value="">Select Available Doctor First</option>'; 
        	return true;
    	}
	}

    public function insert_patient($data){
        $query  =   $this->db->insert('patient_details',$data);
        return true;
    }

    public function getpatient(){
        $this->db->select_max('patient_id');
        $query = $this->db->get('patient_details');
        return $query->result();
    }

    public function insert_appointment($data){
        $query  =   $this->db->insert('booked_appointment',$data);
        return true;
    }

    public function getmy_appointment($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('is_cancelled',0);
        $query = $this->db->get('booked_appointment');
        $myappoint = $query->result();
        return $myappoint;
    }

    public function getmy_cancelledappoint($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('is_cancelled',1);
        $query = $this->db->get('booked_appointment');
        $myappoint = $query->result();
        return $myappoint;
    }
    
}