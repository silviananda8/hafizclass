<?php
class m_login extends CI_Model{
 
	function auth_santri($email,$password){
		$query=$this->db->query("SELECT * FROM santri WHERE EMAIL_SANTRI='$email' AND PASSWORD_SANTRI='$password'");
		return $query;
	}
	function auth_penguji($email,$password){
		$query=$this->db->query("SELECT * FROM penguji WHERE EMAIL_PENGUJI='$email' AND PASSWORD_PENGUJI='$password'");
		return $query;
	}

 
}