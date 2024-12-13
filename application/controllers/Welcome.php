<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$data['header'] = '';
		$data['file_name'] = 'home/system_check';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function explorer()
	{
		$data['header'] = 'header';
		$data['file_name'] = 'home/wizard';
		$data['footer'] = 'footer';

		$this->load->view('dashboard', $data);
	}

	public function login(){

		$data['header'] = '';
		$data['file_name'] = 'login';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function course_type(){
		
		$data['header'] = 'login_header';
		$data['file_name'] = 'home/select_course';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}
}
