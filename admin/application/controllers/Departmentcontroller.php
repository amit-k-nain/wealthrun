<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departmentcontroller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Departmentmodel');
    }

	public function add_department()
	{
		$this->load->view('department/add-department');
	}

	public function department_list(){
		$data['dept_details'] = $this->Departmentmodel->getdepartment();
		$this->load->view('department/department-list',$data);
	}

	public function add_departmentprocess(){
		$data = array(
        'dept_name'		=>$this->input->post('department_name'),
        'dept_head'		=>$this->input->post('department_head'),
        'status'		=>$this->input->post('status'),
        'added_on'		=>date('Y-m-d')
    	);

    	$dept_added = $this->Departmentmodel->add_department($data);
    	if($dept_added){
    		$_SESSION['dept_added']= "Department added successfully";
    		redirect('Departmentcontroller/add_department');
    	}
    	else{
    		$_SESSION['dept_failed']= "Something went wrong";
    		redirect('Departmentcontroller/add_department');
    	}
	}
}
