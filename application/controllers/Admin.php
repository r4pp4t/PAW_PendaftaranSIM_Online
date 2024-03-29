<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
        $this->load->library('encryption');
    }

    public function index()
    {
        $data["admin"] = $this->admin_model->getAll();
        $data2['title']  = 'Admin';
		$this->load->view('templates/auth_header',$data2);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/auth_footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/index');
       
        $admin = $this->admin_model;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["admin"] = $admin->getById($id);
        if (!$data["admin"]) show_404();
        $data2['title']  = 'Form update';
		$this->load->view('templates/auth_header',$data2);
        $this->load->view("admin/edit", $data);
        $this->load->view('templates/auth_footer');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->admin_model->delete($id)) {
            redirect(site_url('admin/index'));
        }
    }

    public function creat(){
        $this->form_validation->set_rules('username','Username','required|trim|is_unique[admin.username]',['is_unique'=>'Username sudah digunakan!']);
        if($this->form_validation->run()== false){
             $data2['title']  = 'Form Input Data';
            $this->load->view('templates/auth_header',$data2);
            $this->load->view("admin/creat");
            $this->load->view('templates/auth_footer');
        }else{
            $data=[
                'username'=>$this->input->post('username'),
                'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => $this->input->post('level')
            ];
            $this->db->insert('admin',$data);
            redirect('admin');
        }

       
    }
}