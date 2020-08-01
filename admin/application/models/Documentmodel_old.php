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
}
