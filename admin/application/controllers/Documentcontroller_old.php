<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentcontroller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Documentmodel');
    }

	public function add_document()
	{
		$this->load->view('document/add-document');
	}
	
	public function adddocument_process(){
	    $docname = $this->input->post('doc_name');
	    $docexist = $this->Documentmodel->getdocname($docname);
	    if($docexist == 1){
	        $_SESSION['doc_exist'] = "This doc is already exist";
	        redirect('Documentcontroller/add_document');
	    }
	    else{
	        $data = array(
	            'doc_name' => $this->input->post('doc_name'),
	            'status' => $this->input->post('status'),
	            'doc_description' => $this->input->post('description'),
	            'added_on' => date('Y-m-d')
	        );
	        $inserted = $this->Documentmodel->insert_doc($data);
	        $_SESSION['doc_added'] = "Yor document added successfully";
	        redirect('Documentcontroller/document_list');
	    }
	}
	
	public function document_list()
	{
	    $data['doc'] = $this->Documentmodel->getalldoc();
		$this->load->view('document/document-list',$data);
	}
    
    public function doc_delete(){
        $doc_id = $_REQUEST['del_id'];
        $id = base64_decode($doc_id);
        $document_del = $this->Documentmodel->deleterecords($id);
        if($document_del){
            $_SESSION['doc_del'] = "Your document deleted successfully";
            redirect("Documentcontroller/document_list");
        }
    }
    
    public function document_update(){
        $update_doc = base64_decode($_POST['upd_doc_id']);
         $doc_data = array(
            'doc_name'    => $this->input->post('doc_name'),
            'doc_description'  => $this->input->post('doc_desc'),
            'status'          => $this->input->post('doc_status'),
            'updated_on'      => date('Y-m-d')
            );
            
            $doc_update = $this->Documentmodel->getdoc_byid($update_doc,$doc_data);
            if($doc_update){
                 $_SESSION['doc_update'] = "Your Document type updated";
                 redirect('Documentcontroller/document_list');
        }
    }
}
