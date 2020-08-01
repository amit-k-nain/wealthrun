<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadedcontroller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Uploadedmodel');
    }

	public function uploaded_list(){
	    $data['uploaded_doc'] = $this->Uploadedmodel->getuploaded_doc();
		$this->load->view('uploaded/document-list',$data);
	}

	public function user_docs(){
		$sid = $_REQUEST['sid'];
	    $data['user_docs'] = $this->Uploadedmodel->get_user_docs($sid);
	    $data['sid'] = $sid;
		$this->load->view('uploaded/user_docs',$data);
	}

	public function update_data(){
		$pid = $_REQUEST['payment_id'];
		$user_id = $_REQUEST['user_id'];
		$status = $_REQUEST['status'];
		$remarks = $_REQUEST['remarks'];
		$number = $_REQUEST['number'];
		$time = date('Y-m-d H:i:s');
		$r[] = array('remarks' => $remarks, 'time' => $time);

		$old = $this->Uploadedmodel->get_siblge_payment_details($pid,$user_id);
		$oldRemark = json_decode($old[0]->remarks,true);
		if($oldRemark){
			if($remarks){
				$res = array_push($oldRemark,array('remarks' => $remarks, 'time' => $time));
			}
		}else{
			$oldRemark = $r;
		}

		$data = array(
			'status' => $status,
			'number' => $number,
			'remarks' => json_encode($oldRemark)
		);

		$user_service_update = $this->Uploadedmodel->user_service_update($pid,$user_id,$data);

		if($user_service_update){
			redirect('Uploadedcontroller/uploaded_list');
		}

		/*$data['uploaded_doc'] = $this->Uploadedmodel->getuploaded_doc();
		$this->load->view('uploaded/document-list',$data);*/
	}

}
