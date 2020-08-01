<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaccinecontroller extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Doctormodel');
        $this->load->model('Departmentmodel');
        $this->load->model('Schedulemodel');
        $this->load->model('Appointmentmodel');
        $this->load->model('Apimodel');
        $this->load->model('Vaccinemodel');
    }

    public function add_vaccine()
	{
		$this->load->view('vaccine/add-vaccine');
	}

	public function vaccine_list(){
		$data['vaccine_details'] = $this->Vaccinemodel->getvaccinelist();
		$this->load->view('vaccine/vaccine-list',$data);
	}

	public function addvaccine_process(){
		$data = array(
        'vaccine_name'			=>$this->input->post('vaccine_name'),
        'age'					=>$this->input->post('age'),
        'vaccine_description'	=>$this->input->post('vaccine_desc'),
        'status'				=>1,
        'added_on'				=>date('Y-m-d')
    	);
    	$vacname = $this->input->post('vaccine_name');
    	$vacnage = $this->input->post('age');

		$ifvacexist = $this->Vaccinemodel->get_vaccineexistence($vacname,$vacnage);
		if($ifvacexist > 0){
			$_SESSION['vaccine_existed']= "This vaccine already exists";
	    	redirect('Vaccinecontroller/add_vaccine');
		}
		else{
			$vaccine_added = $this->Vaccinemodel->add_vaccine($data);
	    	if($vaccine_added){
	    		$_SESSION['vaccine_added']= "Vaccine has been added";
	    		redirect('Vaccinecontroller/add_vaccine');
	    	}
	    	else{
	    		$_SESSION['vaccine_failed']= "Something Wrong";
	    		redirect('Vaccinecontroller/add_vaccine');
	    	}
		}
    	
	}
	
}
