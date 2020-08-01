<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentmodel extends CI_Model {
	public function getdocname($docname){
	    $this->db->where('doc_name',$docname);
		$query = $this->db->get('document_required');
		return $query->num_rows();
	}
	
	public function insert_doc($data){
	    $this->db->insert('document_required',$data);
	    return true;
	}
	
	public function getalldoc(){
	    $query = $this->db->get('document_required');
	    return $query->result();
	}

	public function getallblogs(){
	    $query = $this->db->order_by('id', 'DESC')->get('blogs');
	    return $query->result();
	}

	public function getallbanners(){
	    $query = $this->db->order_by('id', 'DESC')->get('banners');
	    return $query->result();
	}

	public function get_blog($bid){
	    $query = $this->db->where('id',$bid)->order_by('id', 'DESC')->get('blogs');
	    return $query->result();
	}
	
	public function get_banner($bid){
	    $query = $this->db->where('id',$bid)->order_by('id', 'DESC')->get('banners');
	    return $query->result();
	}

	public function get_video(){
	    $query = $this->db->order_by('id', 'DESC')->limit(1, 0)->get('videos');
	    return $query->result();
	}
	
	public function deleterecords($id){
	    $this->db->where('doc_id',$id);
		$this->db->delete('document_required');
		return true;
	}
	
	public function getdoc_byid($update_doc,$doc_data){
	    $this->db->where('doc_id',$update_doc);
	    $this->db->update('document_required',$doc_data);
	    return true;
	}

	public function blog_update($bid,$data){
	    $this->db->where('id',$bid);
	    $this->db->update('blogs',$data);
	    return true;
	}
	
	public function banner_update($bid,$data){
	    $this->db->where('id',$bid);
	    $this->db->update('banners',$data);
	    return true;
	}

	public function insert_blog($data){
		$this->db->insert('blogs',$data);
		return true;
	}
	
	public function insert_banner($data){
		$this->db->insert('banners',$data);
		return true;
	}

	public function insert_video($data){
		$this->db->insert('videos',$data);
		return true;
	}
}
