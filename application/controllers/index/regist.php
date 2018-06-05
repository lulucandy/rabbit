<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Regist extends CI_Controller{
		/* 注册 */	
		public function index(){
			
			$this->load->view('index/regist.html');
		}
		public function register(){
			$username = $this->input->post('user');
 			$password = md5($this->input->post('user_passwd'));
 			$this->load->model('index', 'index');
 			$user1 = $this->index->login($username);
 			//print_r($user1);die;
 			if($user1 == NULL){
 				$user[] = $this->index->regist($username,$password);
 				if($user){
 					success('index/home/index','注册成功');
 				}else{
 					error('您的输入有误，请重新输入');
	 			}
 			}else{
 				error('用户名已存在，请重新输入！');
 				
 			}
 			
 			
 			
		}


}