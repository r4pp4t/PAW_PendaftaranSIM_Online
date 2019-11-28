<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "admin";

    public $id;
    public $username;
    public $password;
    public $level;


    
    
    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Passwrord',
            'rules' => 'required'],
            
            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update()
    {
        $data=[
            'username'=>$this->input->post('username'),
            'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => $this->input->post('level')
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('admin',$data);
        redirect('admin/index');
   
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}