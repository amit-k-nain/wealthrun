<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Businessmodel extends CI_Model {
    
    public function getbusinesstype($businestyp){
        $this->db->where('business_type',$businestyp);
        $query = $this->db->get('business_type');
        return $query->num_rows();
    }
    
    public function insert_business_type($data){
        $this->db->insert('business_type',$data);
        return true;
    }
    
    public function getbusinesstypedetails(){
        $query = $this->db->get('business_type');
        return $query->result();
    }
    
    public function deleterecords($id){
	    $this->db->where('id',$id);
		$this->db->delete('business_type');
		return true;
	}
	
	public function getcateg_byid($bus_id,$busi_data){
	    $this->db->where('id',$bus_id);
	    $this->db->update('business_type',$busi_data);
	    return true;
	}
    
}