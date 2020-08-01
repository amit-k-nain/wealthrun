
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthtipsmodel extends CI_Model {
	
	public function get_categbyname($categ_name){
		$this->db->where('category_name', $categ_name);
        $query = $this->db->get('health_categories');
        $cet = $query->num_rows();
        return $cet;
	}

	public function insert_categories($data){
		$query 	= 	$this->db->insert('health_categories',$data);
		return true;
	}

	public function get_categorieslist(){
		$query	=	$this->db->get('health_categories');
    	return $query->result();
	}

	public function insert_healthtips($data){
		$query 	= 	$this->db->insert('health_tips',$data);
		return true;
	}

	public function get_healthtiplist(){
		$query	=	$this->db->get('health_tips');
    	return $query->result();
	}

	public function get_healthtipslist($categid,$tiptitle){
		$this->db->where('category_id', $categid);
		$this->db->where('health_tip_title', $tiptitle);
        $query = $this->db->get('health_tips');
        $healthtip = $query->num_rows();
        return $healthtip;
	}
}
