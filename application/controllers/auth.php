<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if($this->form_validation->run()==false){
			$data['title']  = 'SIM Online';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/index');
			$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">User tidak ada!!</div>');
			$this->load->view('templates/auth_footer');
		}else{
			$this->_login();
		}
		
	}
	public function registrasi(){
		$this->form_validation->set_rules('username','Username','required|trim|is_unique[admin.username]',['is_unique'=>'Username sudah digunakan!']);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[Re-password]',['matches'=>'Password tidak sama!','min_length'=>'Password kurang dari 3 karakter!']);
		$this->form_validation->set_rules('Re-password','Re-Password','required|trim|matches[password]',['matches'=>'Password tidak sama!']);

		if($this->form_validation->run()== false){
			$data['title']  = 'Registrasi User';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');
		}else{
			$data=[
				'username'=>$this->input->post('username'),
				'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => 2
			];
			$this->db->insert('admin',$data);
			$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Selamat Anda sudah terdaftar. Silahkan Login :)</div>');
			redirect('login_user');
		}
		
	}
}