
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicesmodel extends CI_Model {

	public function insert_Services($data){
		$query = $this->db->insert('services',$data);
		return true;
	}
	
	public function get_s_category($s_category){
	    $this->db->where('s_category_name',$s_category);
		$query = $this->db->get('service_category');
		return $query->num_rows();
	}
	
	public function insert_s_category($data){
	    $query = $this->db->insert('service_category',$data);
		return true;
	}
	
	public function get_s_categorydeatils(){
	    $query = $this->db->get('service_category');
    	$users = $query->result();
    	return $users;
	}

	public function get_Services(){
		$query = $this->db->get('services');
    	$users = $query->result();
    	return $users;
	}

	public function get_Services_content(){
		$query = $this->db->get('service_content');
    	$users = $query->result();
    	return $users;
	}

	public function getservice_byname($serv_name){
		$this->db->where('s_name',$serv_name);
		$query = $this->db->get('services');
		return $query->num_rows();
	}

	public function deleterecords($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('services');
		return $query;
	}

	public function update_Services($up_id,$data){
		$this->db->where('id',$up_id);
		$query = $this->db->update('services',$data);
		return true;
	}

	public function update_Services_content($up_id,$data){
		$this->db->where('id',$up_id);
		$query = $this->db->update('service_content',$data);
		return true;
	}
	
	 public function s_category_del($c_id){
	    $this->db->where('s_categ_id',$c_id);
		$this->db->delete('service_category');
		return true;
	}
	
	public function getcateg_byid($categ_id,$categ_data){
	    	$this->db->where('s_categ_id',$categ_id);
    		$query = $this->db->update('service_category',$categ_data);
    		return true;
	}
}
