<?php
class m_login extends CI_Model{
 
	function auth_santri($email,$password){
		$query=$this->db->query("SELECT * FROM santri WHERE EMAIL_SANTRI='$email' AND PASSWORD_SANTRI='$password'");
		return $query;
	}
	function auth_ustadz($email,$password){
		$query=$this->db->query("SELECT * FROM ustadz WHERE EMAIL_USTADZ='$email' AND PASSWORD_USTADZ='$password'");
		return $query;
	}

 
}