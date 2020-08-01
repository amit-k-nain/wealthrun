<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Businesscontroller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Businessmodel');
    }

	public function add_business()
	{
		$this->load->view('business/add-business');
	}

	public function business_list(){
	    $data['busines_type'] = $this->Businessmodel->getbusinesstypedetails();
		$this->load->view('business/business-list',$data);
	}
	
	public function addbusiness_process(){
	    $businestyp = $this->input->post('business_type');
	    $businesexist = $this->Businessmodel->getbusinesstype($businestyp);
	    if($businesexist == 1){
	        $_SESSION["busi_exist"] ="Business Type already existed";
	        redirect('Businesscontroller/add_business');
	    }
	    else{
	        $data = array(
	            'business_type'=>$this->input->post('business_type'),    
	            'description'=>$this->input->post('description'),    
	            'status'=>$this->input->post('status'),    
	            'added_on'=>date('Y-m-d')    
	        );
	        $this->Businessmodel->insert_business_type($data);
	        $_SESSION["busi_added"] ="Business Type added successfully";
	        redirect('Businesscontroller/business_list');
	    }
	}
	
	 public function business_delete(){
        $busi_id = $_REQUEST['del_id'];
        $id = base64_decode($busi_id);
        $business_del = $this->Businessmodel->deleterecords($id);
        if($business_del){
            $_SESSION['business_del'] = "Business deleted successfully";
            redirect("Businesscontroller/business_list");
        }
    }

    public function update_business(){
        $bus_id = base64_decode($_POST['upd_busi_id']);
         $busi_data = array(
            'business_type'    => $this->input->post('busi_name'),
            'description'    => $this->input->post('busi_desc'),
            'status'          => $this->input->post('busi_status'),
            'updated_on'      => date('Y-m-d')
            );
            
            $business_update = $this->Businessmodel->getcateg_byid($bus_id,$busi_data);
            if($business_update){
                 $_SESSION['business_update'] = "Your Business type updated";
                 redirect('Businesscontroller/business_list');
        }
    }
}
