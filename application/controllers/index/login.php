<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {
	

    /* 登录 */
	public function index()	{
		// echo site_url();die;
		$this->load->view('index/login.html');
	}
		
	public function login_in(){
			// echo site_url();die;
	 		$username = $this->input->post('user_id');
 			$password = $this->input->post('password');
 			//$in_or_ad = $this->input->post('admin');
 			$in_or_ad = $_POST['classify'];

 			//var_dump($in_or_ad);die;
 			
 			if($in_or_ad==0){																	/*后台*/
 				$this->load->model('index', 'index');
 				$user = $this->index->login($username);
 				//
 				//echo $user->admin;die;
 				//print_r($user);die;
 				//$passwd = $this->index->log_in($password);
 		
	 			if($user){
		 					// print_r($user->ad_passwd);
		 					// print_r($password);
		 					// die;}
 					if($user->ad_passwd == $password){
 						//$_SESSION['$user'];
 						
 						success('admin/home/index','登录成功');
 					}else{
 						
 						error('用户名或者密码不正确');
 					}	
 				}else{
 					
 					error('用户名或者密码不正确');
 				}
 	
 			}else{

 				$this->load->model('index', 'index');
 				$user = $this->index->user_login($username);
 				//$passwd = $this->index->user_log_in($password);
 				if($user){
		 					// print_r($user->ad_passwd);
		 					// print_r($password);
		 					// die;}
 					if($user->user_passwd == $password){
 						//$_SESSION['$user'];
 						
 						success('index/home/index','登录成功');
 					}else{
 						
 						error('用户名或者密码不正确');
 					}	
 				}else{
 					
 					error('用户名或者密码不正确');
 				}
 			}
 	}
 			
}
