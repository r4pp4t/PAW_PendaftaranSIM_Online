<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$data['title']  = 'Data User';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('user/index');
		$this->load->view('templates/auth_footer');
	}
}