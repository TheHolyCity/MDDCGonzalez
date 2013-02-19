<?php  if( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Site extends CI_Controller{
		public function index(){
				$this->home();
			}
		public function home(){
				$this->load->model('sitemodel');
				$this->load->library('form_validation');
				$this->load->view('site/header');
				$this->load->view('site/content_landing');
				$this->load->view('site/footer');
		}
		/*	
		public function userpanel(){
			$this->load->model('sitemodel');
			
			$this->load->view('site/header');
			$this->load->view('site/content_user');
			$this->load->view('site/footer');
				
		}
		
								
		public function search_users() {
			$this->load->model('searchusers');		
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$data = array();
			$data['users'] = $this->searchusers->grab_all();
			$this->load->view('site/content_searchusers',$data);
			$this->load->view('site/footer');
		}
		
		public function updateuser(){
			$this->load->library('form_validation');
			$this->load->model('sitemodel');

			$where = "id =". $this->session->userdata('id'); 
			$this->form_validation->set_rules("password", "Password", 'required|matches[repassword]');
			$this->form_validation->set_rules("repassword", "Retype Password", 'required');
			if(! $this->form_validation->run()){
					$this->userpanel();
				}else{
			$data = array('password'=> md5(set_value('password')),'type' =>set_value('type'),'biography'=>set_value('biography'));
			$sql = $this->db->update_string('users', $data, $where);
			$this->db->query($sql);
			
			$data = (object)$data;
			
			$data->type = $this->sitemodel->gettypename($data->type);
						
			$this->session->set_userdata($data);
			$this->userpanel();
			}
		}
		*/
		public function register(){
			$this->load->library('form_validation');
			$this->load->model('sitemodel');
						
			$this->form_validation->set_rules("username", "Username", 'required');
			$this->form_validation->set_rules("email", "Email", 'required');
			$this->form_validation->set_rules("password", "Password", 'required|matches[repassword]');
			$this->form_validation->set_rules("repassword", "Retype Password", 'required');
			
			
			if(! $this->form_validation->run()){
					$this->home();
				}else{
					$data = array('username'=>set_value('username'),'password'=> md5(set_value('password')),'email'=>set_value('email'));
					$sql = $this->db->insert_string('users', $data);
					$this->db->query($sql);
					$this->session->set_userdata($data);
					$this->appview();
			}
			
		}
		
		public function appview(){
			$this->load->model('sitemodel');
			
			$this->load->view('site/loggedin_header');
			$this->load->view('site/loggedin_content');
			$this->load->view('site/loggedin_footer');
		}
		
		public function login(){
			
			$this->load->library('form_validation');
			$this->load->model('sitemodel');
			
			$this->form_validation->set_rules("email", "email", 'required');
			$this->form_validation->set_rules("password", "password", 'required');
			if(! $this->form_validation->run()){
				$this->home();	
			}else{
				$email = set_value('email');
				$password = set_value('password');
				if($this->sitemodel->checklogin($email,$password)){
					
					redirect('index.php/site/userpanel','refresh');
						$this->load->view('site/header_login');
						$this->load->view('site/content_login');
						$this->load->view('site/content_footer');
						
				}else{
					$this->session->set_flashdata('login', 'Login information is incorrect');
					$this->home();
					redirect('index.php','refresh');
				}
				
			}
		}
		public function logout() {
			$this->session->sess_destroy();
			redirect('index.php','refresh');
		}
		
	}
?>