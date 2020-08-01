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

	public function add_blog()
	{
		$this->load->view('blog/add-blog');
	}

	public function add_banner()
	{
		$this->load->view('banner/add-banner');
	}

	public function videos()
	{
		$data['video'] = $this->Documentmodel->get_video();
		$this->load->view('video/add-video',$data);
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

	public function blog_process(){
		if (!$_SESSION['logged_in']){
			redirect('/');
		}

		$image = null;
		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'assets/img/blog/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = time().$_FILES['image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$image = $config['file_name'];
			}
		}

		$data = array(
			'title' => $this->input->post('title'),
			'cat' => $this->input->post('cat'),
			'status' => $this->input->post('status'),
			'content' => $this->input->post('content'),
			'image' => $image,
			'added_on' => date('Y-m-d')
		);

		$inserted = $this->Documentmodel->insert_blog($data);

		$_SESSION['doc_added'] = "Blog added successfully !";

		redirect('Documentcontroller/blog_list');
	}

	public function banner_process(){
		if (!$_SESSION['logged_in']){
			redirect('/');
		}

		$image = null;
		if(!empty($_FILES['banner']['name'])){
			$config['upload_path'] = 'assets/img/banner/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = time().$_FILES['banner']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('banner')){
				$uploadData = $this->upload->data();
				$image = $config['file_name'];
			}
		}

		$data = array(
			'title1' => $this->input->post('title1'),
			'title2' => $this->input->post('title2'),
			'title3' => $this->input->post('title3'),
			'banner' => $image,
			'status' => $this->input->post('status'),
			'added_on' => date('Y-m-d')
		);

		$inserted = $this->Documentmodel->insert_banner($data);

		$_SESSION['doc_added'] = "Banner added successfully !";

		redirect('Documentcontroller/banner_list');
	}

	public function video_process(){

		if (!$_SESSION['logged_in']){
			redirect('/');
		}

		$data = array(
			'content' => $this->input->post('content')
		);

		$inserted = $this->Documentmodel->insert_video($data);

		if ($inserted){
			$_SESSION['success'] = "URLs Updated !";
			redirect('Documentcontroller/videos');
		}

		$_SESSION['error'] = "Something went wrong !";
		redirect('Documentcontroller/videos');
	}
	
	public function document_list()
	{
	    $data['doc'] = $this->Documentmodel->getalldoc();
		$this->load->view('document/document-list',$data);
	}

	public function blog_list()
	{
		$data['blogs'] = $this->Documentmodel->getallblogs();
		$this->load->view('blog/blog-list',$data);
	}

	public function banner_list()
	{
		$data['banners'] = $this->Documentmodel->getallbanners();
		$this->load->view('banner/banner-list',$data);
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

    public function blog_update(){
		$bid = $_REQUEST['bid'];
		$data['blog'] = $this->Documentmodel->get_blog($bid);
		$this->load->view('blog/edit-blog',$data);
    }

    public function banner_update(){
		$bid = $_REQUEST['bid'];
		$data['banner'] = $this->Documentmodel->get_banner($bid);
		$this->load->view('banner/edit-banner',$data);
    }

    public function blog_update_process(){

		if (!$_SESSION['logged_in']){
			redirect('/');
		}

		$bid = $_REQUEST['bid'];

		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'assets/img/blog/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = time().$_FILES['image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$image = $config['file_name'];
			}
			$data = array(
				'title' => $this->input->post('title'),
				'cat' => $this->input->post('cat'),
				'status' => $this->input->post('status'),
				'content' => $this->input->post('content'),
				'image' => $image,
			);
		}else{
			$data = array(
				'title' => $this->input->post('title'),
				'cat' => $this->input->post('cat'),
				'status' => $this->input->post('status'),
				'content' => $this->input->post('content')
			);
		}

		$blog_update = $this->Documentmodel->blog_update($bid,$data);

		if($blog_update){
			$_SESSION['doc_update'] = "Blog updated successfully !";
			redirect('Documentcontroller/blog_list');
		}

		$_SESSION['doc_exist'] = "Something went wrong !";
		redirect('Documentcontroller/blog_list');
        /**/
    }

    public function banner_update_process(){

		if (!$_SESSION['logged_in']){
			redirect('/');
		}

		$bid = $_REQUEST['bid'];

		if(!empty($_FILES['banner']['name'])){
			$config['upload_path'] = 'assets/img/banner/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = time().$_FILES['banner']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('banner')){
				$uploadData = $this->upload->data();
				$image = $config['file_name'];
			}
			$data = array(
				'title1' => $this->input->post('title1'),
				'title2' => $this->input->post('title2'),
				'title3' => $this->input->post('title3'),
				'status' => $this->input->post('status'),
				'banner' => $image
			);
		}else{
			$data = array(
				'title1' => $this->input->post('title1'),
				'title2' => $this->input->post('title2'),
				'title3' => $this->input->post('title3'),
				'status' => $this->input->post('status')
			);
		}

		$banner_update = $this->Documentmodel->banner_update($bid,$data);

		if($banner_update){
			$_SESSION['doc_update'] = "Banner updated successfully !";
			redirect('Documentcontroller/banner_list');
		}

		$_SESSION['doc_exist'] = "Something went wrong !";
		redirect('Documentcontroller/banner_list');
        /**/
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
