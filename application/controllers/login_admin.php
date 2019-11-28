<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run()== false){
			$data['title']  = 'Login Admin';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('login_admin/index');
			$this->load->view('templates/auth_footer');
		}else{
			$this->_login();
		}

	}
	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('admin',['username' => $username])->row_array();

		if($user){
			if(password_verify($password, $user['password'])){
				$data =[
					'username' => $user['username'],
					'level' => $user['level']
				];
				$this->session->set_userdata($data);
				if($user['level']==3){
					redirect('polisi');
				}elseif($user['level']==1){
					redirect('admin');
				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Silahkan Login Menggunakan Akun Polisi Atau ADMIN!</div>');
				redirect('login_admin');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!!</div>');
				redirect('login_admin');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">User tidak ada!!</div>');
			redirect('login_admin');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Selamat anda telah Logout.</div>');
		redirect('login_admin');

	}
}