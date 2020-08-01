<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicescontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Servicesmodel');
		$this->load->model('Documentmodel');   //add model or table which model i use for script
	}

	public function add_services(){
		if($this->session->userdata('logged_in')){
			$data['servic_category'] = $this->Servicesmodel->get_s_categorydeatils();
			$data['doc_req'] = $this->Documentmodel->getalldoc();
			$this->load->view('services/add-services',$data);
		}else{
			redirect(base_url());
		}
	}

	public function services_list(){

		if($this->session->userdata('logged_in')){
			$data['servic_category'] = $this->Servicesmodel->get_s_categorydeatils();
			$data['services'] = $this->Servicesmodel->get_Services();
			$data['doc_req'] = $this->Documentmodel->getalldoc();
			$this->load->view('services/services-list',$data);
		}else{
			redirect(base_url());
		}
	}

	public function services_content(){

		if($this->session->userdata('logged_in')){
			$data['servic_category'] = $this->Servicesmodel->get_s_categorydeatils();
			$data['services'] = $this->Servicesmodel->get_Services_content();
			$data['doc_req'] = $this->Documentmodel->getalldoc();
			$this->load->view('services/services-list1',$data);
		}else{
			redirect(base_url());
		}
	}

	public function add_categories(){
		$this->load->view('services/add-categories');
	}

	public function addcategories_process(){
		$s_category = $this->input->post('s_category');
		$getdata = $this->Servicesmodel->get_s_category($s_category);
		if($getdata > 0){
			$_SESSION['categ_exist'] ="This service category already existed";
			redirect('Servicescontroller/add_categories');
		}
		else{
			$data = array(
				's_category_name' => $this->input->post('s_category'),
				's_category_desc' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				'added_on' => date('Y-m-d')
			);
			$this->Servicesmodel->insert_s_category($data);
			$_SESSION['categ_insert'] ="Service categories inserted successfully";
			redirect('Servicescontroller/categories_list');
		}
	}

	public function s_categ_del(){
		$categ_id = $_REQUEST['categ_del'];
		$c_id = base64_decode($categ_id);
		$categ_del = $this->Servicesmodel->s_category_del($c_id);
		if($categ_del){
			$_SESSION['s_categ_del'] = "Service Category deleted successfully";
			redirect("Servicescontroller/categories_list");
		}
	}
	public function categories_list(){
		$data["category"] = $this->Servicesmodel->get_s_categorydeatils();
		$this->load->view('services/categories-list',$data);
	}

	public function addservices_process(){
		/*$idprof =  $this->input->post('idprof');
		$idpr = implode(",", $idprof);*/

		$servic = $this->input->post('servic');
		$cat = $this->input->post('cat');
		$serviceCost = $this->input->post('serviceCost');

		if(!($servic && $cat && $serviceCost)){
			$_SESSION['error'] = "All fields are required.";
			redirect('Servicescontroller/add_services');
			die;
		}

		$data = array(
			'servic'       =>   $servic,
			'cat'       =>   $cat,
			/*'s_name1'       =>   $this->input->post('serviceName1'),
			's_name2'       =>   $this->input->post('serviceName2'),*/
			's_cost'        =>   $serviceCost,
			/*'doc1'          =>   $service_img1,
			'doc2'          =>   $service_img2,*/
			'status'        =>   1,
			/*'doc_required'  =>   '',*/
			/*'s_description1'=>   $this->input->post('description1'),
			's_description2'=>   $this->input->post('description2'),*/
			'added_on'      =>   date('Y-m-d')
		);

		$service_inserted = $this->Servicesmodel->insert_Services($data);
		$_SESSION['serv_added'] = "Your service added";
		redirect('Servicescontroller/services_list');
		die;

		if(!empty($_FILES['service_img1']['name'])){
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img1']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img1')){
				$uploadData = $this->upload->data();
				$service_img1 = $uploadData['file_name'];
			}else{
				$service_img1 = '';
			}
		}
		else{
			$service_img1 = '';
		}

		if(!empty($_FILES['service_img2']['name'])){
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img2')){
				$uploadData = $this->upload->data();
				$service_img2 = $uploadData['file_name'];
			}else{
				$service_img2 = '';
			}

			$data = array(
				'servic'       =>   $this->input->post('servic'),
				'cat'       =>   $this->input->post('cat'),
				's_name1'       =>   $this->input->post('serviceName1'),
				's_name2'       =>   $this->input->post('serviceName2'),
				's_cost'        =>   $this->input->post('serviceCost'),
				'doc1'          =>   $service_img1,
				'doc2'          =>   $service_img2,
				'status'        =>   1,
				'doc_required'  =>   '',
				's_description1'=>   $this->input->post('description1'),
				's_description2'=>   $this->input->post('description2'),
				'added_on'      =>   date('Y-m-d')
			);

			$service_inserted = $this->Servicesmodel->insert_Services($data);
			$_SESSION['serv_added'] = "Your service added";
			redirect('Servicescontroller/services_list');

			$_SESSION['serv_exist'] = "Your service already exist";
			redirect('Servicescontroller/services_list');
		}else{

			$service_img2 = '';
		}

	}

	public function service_del()
	{

		$del_id = $this->input->get('del_id');
		$id = base64_decode($del_id);
		$serv_delete = $this->Servicesmodel->deleterecords($id);
		$_SESSION['serv_deleted'] = "Your service deleted";
		redirect("Servicescontroller/services_list");
	}

	public function updateservices_process()
	{
		$up_id = base64_decode($_POST['serv_id']);
		/*$idprof =  $this->input->post('idprof');
		$idpr = implode(",", $idprof);*/

		if(!empty($_FILES['service_img1']['name'])){
			$_FILES['service_img1']['name'];
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img1']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img1')){
				$uploadData = $this->upload->data();
				$service_img1 = $uploadData['file_name'];
			}
		}

		if(!empty($_FILES['service_img2']['name'])){
			$_FILES['service_img2']['name'];
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img2')){
				$uploadData = $this->upload->data();
				$service_img2 = $uploadData['file_name'];
			}
		}

		if($service_img1 && $service_img2){
			$data = array(
				'servic'           =>   $this->input->post('servic'),
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				's_cost'            =>   $this->input->post('servicecost'),
				'doc1'              =>   $service_img1,
				'doc2'              =>   $service_img2,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2'),
				/*'doc_required'      =>   $idpr,*/
				'added_on'          =>   date('Y-m-d')
			);
		}elseif ($service_img2){
			$data = array(
				'servic'           =>   $this->input->post('servic'),
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				's_cost'            =>   $this->input->post('servicecost'),
				'doc2'              =>   $service_img2,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2'),
				/*'doc_required'      =>   $idpr,*/
				'added_on'          =>   date('Y-m-d')
			);
		}elseif ($service_img1){
			$data = array(
				'servic'           =>   $this->input->post('servic'),
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				's_cost'            =>   $this->input->post('servicecost'),
				'doc1'              =>   $service_img1,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2'),
				/*'doc_required'      =>   $idpr,*/
				'added_on'          =>   date('Y-m-d')
			);
		}else{
			$data = array(
				'servic'           =>   $this->input->post('servic'),
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				's_cost'            =>   $this->input->post('servicecost'),
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2'),
				/*'doc_required'      =>   $idpr,*/
				'added_on'          =>   date('Y-m-d')
			);
		}

		$service_updated = $this->Servicesmodel->update_Services($up_id,$data);
		$_SESSION['serv_updated'] = "Service updated !";
		redirect('Servicescontroller/services_list');
	}

	public function updateservices_content_process()
	{
		$up_id = base64_decode($_POST['serv_id']);
		
		$service_img1 = $service_img2 = '';

		if(!empty($_FILES['service_img1']['name'])){
			$_FILES['service_img1']['name'];
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img1']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img1')){
				$uploadData = $this->upload->data();
				$service_img1 = $uploadData['file_name'];
			}
		}

		if(!empty($_FILES['service_img2']['name'])){
			$_FILES['service_img2']['name'];
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
			$config['file_name'] = $_FILES['service_img2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('service_img2')){
				$uploadData = $this->upload->data();
				$service_img2 = $uploadData['file_name'];
			}
		}

		if($service_img1 && $service_img2){
			$data = array(
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				'doc1'              =>   $service_img1,
				'doc2'              =>   $service_img2,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2')
			);
		}elseif ($service_img2){
			$data = array(
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				'doc2'              =>   $service_img2,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2')
			);
		}elseif ($service_img1){
			$data = array(
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				'doc1'              =>   $service_img1,
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2')
			);
		}else{
			$data = array(
				's_name1'           =>   $this->input->post('servicename1'),
				's_name2'           =>   $this->input->post('servicename2'),
				'status'            =>   1,
				's_description1'    =>   $this->input->post('servicedesc1'),
				's_description2'    =>   $this->input->post('servicedesc2')
			);
		}

		$service_updated = $this->Servicesmodel->update_Services_content($up_id,$data);
		$_SESSION['serv_updated'] = "Service content updated !";
		
		redirect('Servicescontroller/services_content');
	}

	public function update_categories(){
		$categ_id = base64_decode($_POST['upd_categ_id']);
		$categ_data = array(
			's_category_name'    => $this->input->post('s_categ_name'),
			's_category_desc'    => $this->input->post('c_description'),
			'status'          => $this->input->post('c_status'),
			'updated_on'      => date('Y-m-d')
		);

		$category_update = $this->Servicesmodel->getcateg_byid($categ_id,$categ_data);
		if($category_update){
			$_SESSION['s_categ_update'] = "Your service updated";
			redirect('Servicescontroller/categories_list');
		}
	}

	public function test(){
		$this->load->view('test');
	}

	public function test_process(){
		$cate = $_POST['category'];
		$fil = $_FILES['file'];
		$des = $_POST['description'];
		$ffd = implode(",",$fil['name']);
		print_r($ffd);
	}
}
