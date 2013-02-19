<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller{
	public function index(){
		$this->load->view('blog_view');
		}
}
?>