<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Apicontroller extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Doctormodel');
        $this->load->model('Departmentmodel');
        $this->load->model('Schedulemodel');
        $this->load->model('Appointmentmodel');
        $this->load->model('Apimodel');
        $this->load->model('Vaccinemodel');
        $this->load->model('Healthtipsmodel');
    }

/* signup start */ 
	public function signup(){
    
        $data = array(); 
        $_POST = $_REQUEST;      
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('contact', 'Mobile Number', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('city', 'City', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) 
    		{
    		    $data["response"] = false;  
    			$data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
                
    		}else
            {
                $usercon = $this->input->post("contact");
                $userxist = $this->Apimodel->get_users($usercon);
                if($userxist == 0){
                    $data = array(
                    "name"          =>$this->input->post("name"),
                    "contact"       =>$this->input->post("contact"),
                    "password"      =>$this->input->post("password"),
                    "city"          =>$this->input->post("city"),
                    "registered_on" =>date('Y-m-d'),
                    "status"        =>1
                    );
                    $users = $this->Apimodel->signup_users($data);         
                    if($users){
                        $data["response"] = true;
                        $data["success"] = "User registered successfully";
                    }
                    else{
                        $data["response"] = false;
                        $data["error"] = 'Something Went Wrong';
                    }
                }
                else{
                    $data["response"] = false;
                    $data["error"] = 'This number is already registered';
                }  
                
            }                  
                echo json_encode($data);
    }
/* signup end */ 

/* user profile updation  start */ 
    public function update_user_profile(){
        $data = array(); 
        $_POST = $_REQUEST;      
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_id', 'User', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) 
            {
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
            }
            else{
                $userimg = $this->input->post('user_img');
                if(!empty($_FILES['user_img']['name'])){
            
                $config['upload_path'] = 'assets/img/user_profile';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['user_img']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                    if($this->upload->do_upload('user_img')){
                        $uploadData = $this->upload->data();
                        $user_img = $uploadData['file_name'];
                    }else{
                        $user_img = '';
                    }
                }
                else{
                    
                    $user_img = '';
                }
                $iuserid = $this->input->post('user_id');
                $data = array(
                    'email'         => $this->input->post('email'),
                    'contact'       => $this->input->post('contact'),
                    'city'          => $this->input->post('city'),
                    'age'           => $this->input->post('age'),
                    'user_img'      => $user_img,
                    'updated_on'    => date('Y-m-d')
                );

                $user_prof_exist = $this->Apimodel->get_user_profile($iuserid);
                if($user_prof_exist > 0){
                    $profile_updated  = $this->Apimodel->update_user_profile($iuserid,$data);
                    if($profile_updated == true){
                        $data["responce"] = true;
                        $data["success"] = 'Your Profile has been updated successfully';
                    }
                    else{
                        $data["responce"] = false;
                        $data["error"] = 'Sorry! Something went wrong';
                    }
                }
                else{
                    $data["responce"] = false;
                    $data["error"] = 'Sorry! You are not registered';
                }
            }
            echo json_encode($data);
    }
/* user profile updation  end */ 

/* login start */ 
    public function login(){
            $data = array(); 
            $_POST = $_REQUEST;      
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email Id',  'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
               
                if ($this->form_validation->run() == FALSE) 
        		{
        		    $data["responce"] = false;  
        			$data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
                    
        		}else
                {
                   	$email	= $this->input->post("email");
	                $pass	= $this->input->post("password");

                	$logged_in = $this->Apimodel->getloggedin_users($email,$pass);
                    if($logged_in == 1){
                    	$data["responce"] = true;
                    	$data["success"] = 'You are successfully logged in';
                    }
                    else{
                    	$data["responce"] = false;  
   			            $data["error"] = 'Warning! : Invalide Email or Password';
                    }    
                    
                }
           	echo json_encode($data);
    }
/* login end */  


/* book appointment start */  
    public function department_list(){
			$data = $this->Departmentmodel->getdepartment();
			echo json_encode($data);
	}

	public function getdoctor_bydptwise(){
        $this->form_validation->set_rules('dept_id', 'Department', 'trim|required');
        if($this->form_validation->run() == FALSE){
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
        }
        else{
            $deptid = $this->input->post("dept_id");
            $data = $this->Apimodel->getdoctor_bydept($deptid);
            if($data){
                $data["response"] = true;  
                $data["success"] = 'Doctor is available';
            }
            else{
                $data["response"] = false;  
                $data["success"] = 'Doctor is not available';
            } 
        }
		
		echo json_encode($data);
	}

    public function getdoctor_appointment_date(){
        $this->form_validation->set_rules('appoint_date', 'Date', 'trim|required');
        if($this->form_validation->run() == FALSE){
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
        }
        else{
            $appoint_date = $this->input->post("appoint_date");
            $docid = $this->input->post("docid");
            $timestamp = strtotime($appoint_date);
            $day = date('D', $timestamp);
            $docappointdate = $this->Apimodel->getdoctorschedule_byday($day,$docid);
            if($docappointdate > 0){
                $data["response"] = true;  
                $data["success"] = 'Doctor is available on this date';
            }
            else{
                $data["response"] = false;  
                $data["success"] = 'Doctor is not available on this date';
                $appoint_date = "";
            }
        }
        
        echo json_encode($data);
    }

    public function getdoctor_appointment_time(){
        $this->form_validation->set_rules('docid', 'Doctor', 'trim|required');
        if($this->form_validation->run() == FALSE){
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
        }
        else{
            $docid = $this->input->post("docid");
            $doctor_time = $this->Apimodel->getdoctorschedule_bytime($docid);
        }
        echo json_encode($doctor_time);
    }

    public function book_appointment(){
        $this->form_validation->set_rules('p_name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('p_contact', 'Patient Contact', 'trim|required');
        $this->form_validation->set_rules('p_age', 'Patient age', 'trim|required');
        $this->form_validation->set_rules('p_gender', 'Patient gender', 'trim|required');
        $this->form_validation->set_rules('dept', 'Department', 'trim|required');
        $this->form_validation->set_rules('doctor', 'Doctor', 'trim|required');
        $this->form_validation->set_rules('appoint_date', 'Appointment date', 'trim|required');
        $this->form_validation->set_rules('appoint_time', 'Appointment time', 'trim|required');
        $this->form_validation->set_rules('prob', 'Problem Information', 'trim|required');

        if($this->form_validation->run() == FALSE){
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
        }
        else{

        $data = array(
        'added_by_user_id'  =>$this->input->post('userid'),
        'patient_name'      =>$this->input->post('p_name'),
        'patient_email'     =>$this->input->post('p_email'),
        'patient_contact'   =>$this->input->post('p_contact'),
        'patient_age'       =>$this->input->post('p_age'),
        'patient_gender'    =>$this->input->post('p_gender'),
        'added_on'          =>date('Y-m-d'),
        'status'            =>1
        );

        $patient = $this->Appointmentmodel->insert_patient($data);
        $getpatient = $this->Appointmentmodel->getpatient();
        $patient_id = $getpatient[0]->patient_id;
        $time = time();
        $tokenid = substr($time, -6);

        if($patient){
            $data = array(
            'user_id'           =>$this->input->post('userid'),
            'department_id'     =>$this->input->post('dept'),
            'patient_id'        =>$patient_id,
            'doctor_id'         =>$this->input->post('doctor'),
            'appointment_date'  =>$this->input->post('appoint_date'),
            'appointment_time'  =>$this->input->post('appoint_time'),
            'problem'           =>$this->input->post('prob'),
            'token_id'          =>$tokenid,
            'booked_on'         =>date('Y-m-d'),
            'is_cancelled'      =>0
            );

            $booked_appoint = $this->Appointmentmodel->insert_appointment($data);
            if($booked_appoint){
                $data["response"] = true;  
                $data["success"] = 'Appointment has been booked';
            }
            else{
                $data["response"] = false;  
                $data["error"] = 'Appointment booking failed';
            }
        }
        else{
            $data["response"] = false;  
            $data["error"] = 'Something Wrong';
        }

        }
        echo json_encode($data); 
    }

    public function getmy_appointment(){
        $user_id = $this->input->post("user_id");
        $data = $this->Appointmentmodel->getmy_appointment($user_id);
        if($data){
            $data["response"] = true;  
            $data["success"] = 'My Appointment are listed below';
        }
        else{
            $data["response"] = false;  
            $data["error"] = 'No booking done yet';
        }
        echo json_encode($data);
    }

    public function getmy_cancelledappoint(){
        $user_id = $this->input->post("user_id");
        $data = $this->Appointmentmodel->getmy_cancelledappoint($user_id);
        if($data){
            $data["response"] = true;  
            $data["success"] = 'These listed appointments are cancelled';
        }
        else{
            $data["response"] = false;  
            $data["error"] = 'No booking cancelled yet';
        }
        echo json_encode($data);
    }
/* book appointment end */    

/* vaccination start */
    public function getvaccine(){
        $data = $this->Vaccinemodel->getvaccinelist();
        echo json_encode($data);
    }

    public function adduserchild(){
        $this->form_validation->set_rules('child_name', 'Child Name', 'trim|required');
        $this->form_validation->set_rules('child_gender', 'Child gender', 'trim|required');
        $this->form_validation->set_rules('child_blood', 'Child blood group', 'trim|required');
        $this->form_validation->set_rules('child_special_remark', 'Child Special Remark', 'trim|required');

        $this->form_validation->set_rules('child_address', 'Child Address', 'trim|required');
        $this->form_validation->set_rules('parent_contact', 'Parent Contact', 'trim|required');
        $this->form_validation->set_rules('child_age', 'Child Age', 'trim|required');

        if($this->form_validation->run() == FALSE){
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
        }
        else{
            $data = array(
                'user_id'               =>$this->input->post("user_id"),
                'child_name'            =>$this->input->post("child_name"),
                'child_gender'          =>$this->input->post("child_gender"),
                'child_blood'           =>$this->input->post("child_blood"),
                'child_special_remark'  =>$this->input->post("child_special_remark"),
                'child_address'         =>$this->input->post("child_address"),
                'parent_contact'        =>$this->input->post("parent_contact"),
                'child_age'             =>$this->input->post("child_age"),
                'status'                =>1,
                'added_on'              =>date('Y-m-d')
            );

            $userchild = $this->Apimodel->add_userschild($data);
            if($userchild){
                $data["response"] = true;  
                $data["success"] = "Child is added succesfully";
            }
            else{
                $data["response"] = false;  
                $data["error"] = "Child is not added";
            }
        }
        echo json_encode($data);
    }

    public function getuserschild(){
        $user_id = $this->input->post("user_id");
        $data = $this->Apimodel->getuserchildlist($user_id);
        if($data){
            $data["response"] = true;  
            $data["success"] = "Here is child's details";
        }
        else{
            $data["response"] = false;  
            $data["error"] = "Child details is not available";
        }
        echo json_encode($data);
    }
/* vaccination end */

/* medical records start */
    public function createfolder(){
        $dirname = $this->input->post("folder_name");
        $filename = "assets/patient/".$dirname."/";

        if (!is_dir($filename )) {
            mkdir("assets/patient/".$dirname, 0777, true);
            mkdir("assets/patient/".$dirname."/Radiology", 0777, true);
            mkdir("assets/patient/".$dirname."/Emergency", 0777, true);
            mkdir("assets/patient/".$dirname."/Prescription", 0777, true);
            mkdir("assets/patient/".$dirname."/Pathology", 0777, true);
            mkdir("assets/patient/".$dirname."/Medical bill", 0777, true);
            mkdir("assets/patient/".$dirname."/Other", 0777, true);
            mkdir("assets/patient/".$dirname."/All documents", 0777, true);
            $data["response"] = true;  
            $data["success"] = "The directory $dirname created successfully.";
        } else {
            $data["response"] = false;  
            $data["error"] = "The directory $dirname already exists.";
        }
        echo json_encode($data);
    }

/* medical records end */

/* health tips start */
    public function get_categorieslist(){
        $data = $this->Healthtipsmodel->get_categorieslist();
        if($data){
            $data["response"] = true;  
            $data["success"] = "Here is categories list";
        }
        else{
            $data["response"] = false;  
            $data["error"] = "No category found";
        }
        echo json_encode($data);
    }

    public function get_healthtiplist(){
        $data = $this->Healthtipsmodel->get_healthtiplist();
        if($data){
            $data["response"] = true;  
            $data["success"] = "Here is Health Tip list";
        }
        else{
            $data["response"] = false;  
            $data["error"] = "No Health tip found";
        }
        echo json_encode($data);
    }    
/* health tips end */


/* user chat start */
    public function sendchat_by_user(){
        $data = array(); 
        $_POST = $_REQUEST;      
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_id', 'User', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) 
            {
                $data["response"] = false;  
                $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
            }
            else{
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
                $userid = $this->input->post('user_id');
                $data = array(
                    'sent_by'          => $userid,
                    'sent_to'          => 0,
                    'msg'              => $this->input->post('msg'),
                    'attachment'       => $attachment_name,
                    'attachment_type'  => $attachment_type,
                    'attachment_size'  => $attachment_size,
                    'sent_time'        => date('Y-m-d H:i:s'),
                    'is_read'          => 0,
                    'status'           => 0,
                );
                $insert_chat = $this->Apimodel->insert_sentchatbyuser($data);
                if($insert_chat == true){
                    $data["response"] = true;  
                    $data["success"] = "Message sent";
                }
                else{
                    $data["response"] = false;  
                    $data["error"] = "Message sent failed";
                }
            }
            echo json_encode($data);
    }

    public function get_user_chats(){
            $data = array();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_id', 'User ID', 'trim|required');
            if ($this->form_validation->run() == FALSE) 
            {
                    $data["responce"] = false;
                    $data["message"] = strip_tags($this->form_validation->error_string());
            }
            else
            {   
                $user_id = $this->input->post('user_id');
                $result = $this->Apimodel->get_user_chats($user_id);
                if($result){
                    $data["response"] = true;
                    $data["data"] = $result;
                }
                else{
                    $data["response"] = false;
                    $data["data"] = $result;
                }
            }
            echo json_encode($data);
    }
/* user chat end */

}
