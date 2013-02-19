<?php  if( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Landing extends CI_Controller{
		public function index(){
				$this->home();
			}
		public function home(){
				$this->load->model('sitemodel');
				$this->load->library('form_validation');
				$data['types'] = $this->sitemodel->gettypes();
				$this->load->view('site/header');
				$this->load->view('site/content_landing', $data);
				$this->load->view('site/footer');
		}
			
		public function userpanel(){
			$this->load->model('sitemodel');
			$data['types'] = $this->sitemodel->gettypes();
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$this->load->view('site/content_user', $data);
			$this->load->view('site/footer');
				
		}
		
		public function run_search_users() {
			$this->load->library('form_validation');
			$this->load->model('sitemodel');
			$this->form_validation->set_rules("city", "City", 'required');
			$this->form_validation->run();
			$city = set_value('city');
			$this->load->model('searchusers');
			$data = array();
			$data['users'] = $this->searchusers->search_user($city);
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$this->load->view('site/content_searchusers',$data);
			$this->load->view('site/footer');
		}
		
		public function boardcast() {
			$this->load->model('boardcastmodel');
			$data = array();
			$data['events'] = $this->boardcastmodel->get_recent();
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$this->load->view('site/content_boardcast',$data);
			$this->load->view('site/footer');
		}
		
		public function search_apr() {
			$this->load->model('boardcastmodel');
			$this->load->library('form_validation');
			$this->load->model('sitemodel');
			$this->form_validation->set_rules("city", "City", 'required');
			$this->form_validation->run();
			$city = set_value('city');
			$data = array();
			$data['events'] = $this->boardcastmodel->search_events($city);
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$this->load->view('site/content_boardcast',$data);
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
			$this->form_validation->set_rules("type", "Transport", 'required');
			$this->form_validation->set_rules("biography", "Biography", 'required');
			//$this->form_validation->set_rules("image", "Image", '');
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
		
		public function register(){
			$this->load->library('form_validation');
			$this->load->model('sitemodel');
			
			$filename = $this->sitemodel->do_upload();
			// Check to see if file name is an array and has an error
			if(is_array($filename) && $filename['error']) {
				// Error here 
				$this->session->set_flashdata('register', $filename['error']);
				redirect('index.php','refresh');
			}
			
			$this->form_validation->set_rules("firstname", "First Name", 'required');
			$this->form_validation->set_rules("lastname", "Last Name", 'required');
			$this->form_validation->set_rules("username", "Username", 'required');
			$this->form_validation->set_rules("password", "Password", 'required|matches[repassword]');
			$this->form_validation->set_rules("repassword", "Retype Password", 'required');
			
			$this->form_validation->set_rules("email", "Email", 'required');
			$this->form_validation->set_rules("type", "Transport", 'required');
			$this->form_validation->set_rules("city", "City", 'required');
			$this->form_validation->set_rules("biography", "Biography");
			$this->form_validation->set_rules("image", "Image");
			if(! $this->form_validation->run()){
					$this->home();
				}else{
			$data = array('first_name'=>set_value('firstname'),'last_name'=>set_value('lastname'),'username'=>set_value('username'),'password'=> md5(set_value('password')),'type' =>set_value('type'),'biography'=>set_value('biography'),'email'=>set_value('email'),'city'=>set_value('city'), 'image'=>$filename);
			$sql = $this->db->insert_string('users', $data);
			$this->db->query($sql);
			$this->session->set_userdata($data);
			$this->userpanel();
			}
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
						$this->load->view('site/header');
						$this->load->view('site/content_user');
						$this->load->view('site/footer');
						
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
		public function eventform(){
			$this->load->model('sitemodel');
			$data['types'] = $this->sitemodel->gettypes();
			$this->load->view('site/header');
			$this->load->view('site/nav');
			$this->load->view('site/form_event',$data);
			$this->load->view('site/footer');
		}
		
		public function createevent(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules("eventname", "Event Name", 'required');
			$this->form_validation->set_rules("eventtype", "Event Type", 'required');
			$this->form_validation->set_rules("eventcity", "Event City", 'required');
			$this->form_validation->set_rules('date', 'Event Date','required');
			$this->form_validation->set_rules("eventdescription", "Event Description", 'required');
			if(! $this->form_validation->run()){
				$this->eventform();
			}else{
			$creator_id = $this->session->userdata('id');
			$date = date('Y-m-d h:i:s',strtotime(set_value('date') . ' 00:00:00'));
			$data = array('title'=>set_value('eventname'),'description'=>set_value('eventdescription'),'type'=>set_value('eventtype'),'city'=>set_value('eventcity'),'date' => $date,'creator_id' => $creator_id);
			$sql = $this->db->insert_string('events', $data);
			$this->db->query($sql);
				$this->boardcast();
			}
		}
	}
?>