<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pribadi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_dropdown');
	}


	public function index(){


		if($this->form_validation->run()==false){
			$data['dropdown'] = $this->Model_dropdown->tampil_data();
			$data['pendidikan'] = $this->db->get('pendidikan')->result_array();
			$data['pekerjaan'] = $this->db->get('pekerjaan')->result_array();
			$data2['title']  = 'Data pribadi';
			$this->load->view('templates/auth_header',$data2);
			$this->load->view('auth/data_pribadi',$data);
			$this->load->view('templates/auth_footer');

		}
	}
}