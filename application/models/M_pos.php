<?php
class M_pos extends CI_Model{
 
    public function viewByNik($nik){
    $this->db->where('nik', $nik);
    $result = $this->db->get('ktp')->row(); 
    
    return $result; 

 
}