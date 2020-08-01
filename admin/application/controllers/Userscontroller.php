<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userscontroller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usersmodel');
    }

    public function users_list(){
        $data["userslist"] = $this->Usersmodel->getusers_detail();
    	$this->load->view('users/users-list',$data);
    }

    public function user(){
		if (isset($_REQUEST['uid']) && $_REQUEST['uid']){
			$uid = $_REQUEST['uid'];
			$data["user"] = $this->Usersmodel->get_user($uid);
			$this->load->view('users/user_profile',$data);
		}else{
			redirect(base_url());
		}
    }

	public function user_profile_process(){
		if($this->session->userdata('logged_in'))
		{
			$data = array(
				'password' => $this->input->post('password'),
				'full_name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile'),
			);

			$user_id = $_POST['user_id'];

			$update = $this->Usersmodel->profile_update($user_id,$data);

			if($update){
				$_SESSION['success'] = "Profile Updated !";
				redirect('Userscontroller/user?uid='.$user_id);
			}

			$_SESSION['error'] = "Something went wrong !";
			redirect('Userscontroller/user?uid='.$user_id);
		}else{
			redirect(base_url());
		}
	}
}
