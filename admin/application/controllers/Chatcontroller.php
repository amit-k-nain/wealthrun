<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatcontroller extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Doctormodel');
        $this->load->model('Departmentmodel');
        $this->load->model('Schedulemodel');
        $this->load->model('Appointmentmodel');
        $this->load->model('Apimodel');
        $this->load->model('Vaccinemodel');
        $this->load->model('Healthtipsmodel');
        $this->load->model('Chatmodel');
        $this->load->model('Usersmodel');
    }

    public function ask(){
        $data['userslist'] = $this->Usersmodel->getusers_detail();
        $this->load->view('chats/chat-ask',$data);
    }

    public function askreplylist(){
        $data['userchat'] = $this->Chatmodel->getuserchat();
        $data['chat'] = $this->Chatmodel->getallchat();
        $this->load->view('chats/chat-list',$data);
    }

    public function replymsg(){
        $chatid = $this->input->post('chatid');
        $yourmsg = $this->input->post('yourmsg');

        if(!empty($_FILES['attachment']['name'])){
            $config['upload_path'] = 'assets/img/chat_attachment';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['file_name'] = $_FILES['attachment']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
                if($this->upload->do_upload('attachment')){
                    $uploadData = $this->upload->data();
                    $attachment_name = $uploadData['file_name'];
                    $attachment_type = $_FILES['attachment']['type'];
                    $attachment_size = $_FILES['attachment']['size'];
                }else{
                    $attachment_name = '';
                    $attachment_type = '';
                    $attachment_size = '';
                }
            }
            else{
                $attachment_name = '';
                $attachment_type = '';
                $attachment_size = '';
            }

            $data = array(
                'reply'                 => $yourmsg,
                'reply_attachment'      => $attachment_name,
                'reply_attachment_type' => $attachment_type,
                'reply_time'            => date('Y-m-d H:i:s'),
                'status'                => 1,
            );

            $reply = $this->Chatmodel->replymsg($chatid,$data);
            if($reply == true){
                redirect('Chatcontroller/askreply');
            }
            
    }

    public function asktouser_process(){
        if(!empty($_FILES['attachment']['name'])){
            $config['upload_path'] = 'assets/img/chat_attachment';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['file_name'] = $_FILES['attachment']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
                if($this->upload->do_upload('attachment')){
                    $uploadData = $this->upload->data();
                    $attachment_name = $uploadData['file_name'];
                    $attachment_type = $_FILES['attachment']['type'];
                    $attachment_size = $_FILES['attachment']['size'];
                }else{
                    $attachment_name = '';
                    $attachment_type = '';
                    $attachment_size = '';
                }
            }
            else{
                $attachment_name = '';
                $attachment_type = '';
                $attachment_size = '';
            }

            $data = array(
                'sent_by'           => 0, //0 means admin id
                'sent_to'           => $this->input->post('user'),
                'msg'               => $this->input->post('msg'),
                'attachment'        => $attachment_name,
                'attachment_type'   => $attachment_type,
                'attachment_size'   => $attachment_size,
                'sent_time'         => date('Y-m-d H:i:s'),
                'is_read'           => 0,
                'status'            => 1,
            );
            $dataa = $this->Chatmodel->asktouser_process($data);
            if($dataa == true){
                $_SESSION['msg_sent'] = "Your message has been sent";
                redirect('Chatcontroller/askreplylist');
            }
            else{
                $_SESSION['msg_sent_failed'] = "Something went Wrong";
                redirect('Chatcontroller/ask');
            }
    }

    public function getchatby_userid(){
        $useid = $_POST['useridd'];
        $query = $this->Chatmodel->getchat_byuserid($useid);
        print_r($query);
        
    }

    public function insertchatby_admin(){
        $useid = $_POST['usridd'];
        $msgs = $_POST['msgs'];

        /*if(!empty($_FILES['attachment']['name'])){
            $config['upload_path'] = 'assets/img/chat_attachment';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['file_name'] = $_FILES['attachment']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
                if($this->upload->do_upload('attachment')){
                    $uploadData = $this->upload->data();
                    $attachment_name = $uploadData['file_name'];
                    $attachment_type = $_FILES['attachment']['type'];
                    $attachment_size = $_FILES['attachment']['size'];
                }else{
                    $attachment_name = '';
                    $attachment_type = '';
                    $attachment_size = '';
                }
            }
            else{
                $attachment_name = '';
                $attachment_type = '';
                $attachment_size = '';
            }*/

            $data = array(
                'sent_by'           => 0, //0 means admin id
                'sent_to'           => $useid,
                'msg'               => $msgs,
                /*'attachment'        => $attachment_name,
                'attachment_type'   => $attachment_type,
                'attachment_size'   => $attachment_size,*/
                'sent_time'         => date('Y-m-d H:i:s'),
                'is_read'           => 0,
                'status'            => 1,
            );
            $dataa = $this->Chatmodel->insertadminchat_process($data);
            $query = $this->Chatmodel->getchat_byuserid($useid);
            print_r($query);
    }
}