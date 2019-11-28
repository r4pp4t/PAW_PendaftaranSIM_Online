<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polisi extends CI_Controller {

	public function index(){
		$data['title']  = 'Data Kepolisian';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('polisi/index');
		$this->load->view('templates/auth_footer');
	}
}