<?php
class Login_model extends CI_Model{
	
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE nama='$username' AND pass='$password' LIMIT 1");
		return $query;
	}
	
}
