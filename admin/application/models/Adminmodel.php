<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Adminmodel extends CI_Model {

		public function adminLoginProcess($email,$password){
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			return $query->num_rows();
		}

		public function profile(){
			$query = $this->db->order_by('admin_id', 'DESC')->limit(1,0)->get('admin');
			return $query->result();
		}
		
		public function contact(){
			$query = $this->db->order_by('id', 'DESC')->get('contact');
			return $query->result();
		}

		public function totalBlogs(){
			$query = $this->db->get('blogs');
			return $query->num_rows();
		}

		public function totalContact(){
			$query = $this->db->get('contact');
			return $query->num_rows();
		}

		public function totalBanners(){
			$query = $this->db->get('banners');
			return $query->num_rows();
		}

		public function totalUsers(){
			$query = $this->db->get('users');
			return $query->num_rows();
		}

		public function totalServices($para = null){
			if($para){
				$this->db->where('status',$para);
			}
			$query = $this->db->get('payment');
			return $query->num_rows();
		}

		public function amount(){
			$this->db->select_sum('txn_amount');
			$this->db->from('payment');
			$query = $this->db->get();
			return $query->row()->txn_amount;
		}

		public function profile_update($data){
			$this->db->where('admin_id',1);
			$this->db->update('admin',$data);
			return true;
		}
	}

 ?>
