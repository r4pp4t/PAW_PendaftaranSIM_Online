<?php
class M_pos extends CI_Model{
 
    function get_data_nik($nik){
        $hsl=$this->db->query("SELECT * FROM ktp WHERE nik='$nik'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nik' => $data->nik,
                    'nama' => $data->nama,
                    );
            }
        }
        return $hasil;
    }
 
}