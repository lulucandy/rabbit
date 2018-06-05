<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Index extends CI_Model {
	
	public function login($username){
		//echo $username;die;
		$sql = "select * from admin_id where `admin` = '$username'";
		//echo $sql;die;
		$result = $this->db->query($sql)->row();
		//print_r($result);die;
		return $result;
	}
	public function log_in($password){
		$sql1 = 'select * from admin_id where ad_passwd = ' . $password;
		$result1 = $this->db->query($sql1)->result_array();
		return $result1;
	}
	public function regist($username,$password){
		$sql2 = "INSERT INTO `user` (`user_id`, `user`, `user_passwd`) VALUES (NULL, '$username', '$password')";
		$result2 = $this->db->query($sql2);
		return $result2;
	}



	public function user_login($username){
		//echo $username;die;
		$sql = "select * from user where `user` = '$username'";
		//echo $sql;die;
		$result = $this->db->query($sql)->row();
		//print_r($result);die;
		return $result;
	}
	public function user_log_in($password){
		$sql1 = 'select * from user where user_passwd = ' . $password;
		$result1 = $this->db->query($sql1)->result_array();
		return $result1;
	}

}