<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

/*默认首页显示*/

	public function index()
	{
		 //echo site_url();echo base_url();die;
		$this->load->view('index/home.html');
	}
// /*登录*/
// 	public function login(){
// 		$this->load->view('index/login.html');
// 	}
	
/*题库管理*/

	public function category(){
		$this->load->view('index/category.html');
	}

/*分数统计*/

	public function grade(){
		$this->load->view('index/grade.html');
	}

/*科目管理*/

	public function subject(){
		$this->load->view('index/subject.html');
	}
	
/*学生管理*/

	public function student(){
		$this->load->view('index/student.html');
	}

/*试题管理*/

	public function test(){
		$this->load->view('index/test.html');
	}

/*注销*/

	// public function exit(){
	// 	$this->load->view('index/login.html');
	// }
}
