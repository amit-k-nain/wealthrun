<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admincontroller extends CI_Controller {

		public function __construct(){
	        parent::__construct();
	        $this->load->model('Adminmodel');          
	    }

	    public function admin_home()
	    {
	    	if($this->session->userdata('logged_in'))
	    	{
	    		$data = array();

				$data['amount'] = $this->Adminmodel->amount();
				$data['totalBlogs'] = $this->Adminmodel->totalBlogs();
				$data['totalUsers'] = $this->Adminmodel->totalUsers();
				$data['totalServices'] = $this->Adminmodel->totalServices();
				$data['totalCompleteServices'] = $this->Adminmodel->totalServices('complete');
				$data['totalPendingServices'] = $this->Adminmodel->totalServices('received');
				$data['totalQueryServices'] = $this->Adminmodel->totalServices('query');
				$data['totalProcessServices'] = $this->Adminmodel->totalServices('process');
				$data['totalContact'] = $this->Adminmodel->totalContact();
				$data['totalBanners'] = $this->Adminmodel->totalBanners();

				$this->load->view('welcome_message',$data);
			}else{
				redirect(base_url());
			}
	    }

	    public function profile()
	    {
	    	if($this->session->userdata('logged_in'))
	    	{
	    		$data = array();
				$data['admin'] = $this->Adminmodel->profile();
				$this->load->view('templates/profile',$data);
			}else{
				redirect(base_url());
			}
	    }

	    public function contact_list()
	    {
	    	if($this->session->userdata('logged_in'))
	    	{
	    		$data = array();
				$data['contact'] = $this->Adminmodel->contact();
				$this->load->view('templates/contact',$data);
			}else{
				redirect(base_url());
			}
	    }

		public function profile_process(){
			if($this->session->userdata('logged_in'))
			{
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name')
				);

				$update = $this->Adminmodel->profile_update($data);

				if($update){
					$_SESSION['success'] = "Profile Updated !";
					redirect('Admincontroller/profile');
				}

				$_SESSION['error'] = "Something went wrong !";
				redirect('Admincontroller/profile');
			}else{
				redirect(base_url());
			}
		}

		public function admin_login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$rows = $this->Adminmodel->adminLoginProcess($email,$password);
			// print_r($rows);
			if ($rows == 1) {
				$admin_details = array(
					'admin_email' 	 => $email,    
					'admin_password' => $password,
					'logged_in' => TRUE
				);
				$admin_session = $this->session->set_userdata($admin_details);
				redirect('Admincontroller/admin_home');
			}else{
				 $_SESSION['admin_login'] = "Invalid credential!!";
				 redirect('Admincontroller/admin_home');
			}

		}

		public function admin_logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
 ?>
