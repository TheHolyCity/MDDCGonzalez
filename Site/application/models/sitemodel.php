<?php
class Sitemodel extends CI_Model{
	
	public function checklogin($email,$password){
		$password = md5($password);
		$query = $this->db->query("SELECT * from users WHERE password = '$password' AND email = '$email'");
		
		if($query->num_rows()){
			$result = $query->result();
			$result = $result[0];
			$result->type = $this->gettypename($result->type);
			$this->session->set_userdata($result);
			return true;
		}else{
			return false;
		}
	}
}
?>