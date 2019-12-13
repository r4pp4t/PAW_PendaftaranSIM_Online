<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class model_pend extends CI_Model
{
	public function proses_pendaftaran(){
		$post = $this->input->post();
		$data = array(
			'sim_baru' => $post['sim_baru'], 
			'polda' => $post['polda'],
			'satpas' => $post['satpas'],
			'al_sat' => $post['al_sat'],
			'email' => $post['email'],
			'nik' =>  $post['nik'],
			'nama' => $post['nama'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tgl_lahir' => $post['tgl_lahir'],
			'tinggi' => $post['tinggi'],
			'gol_darah' => $post['gol_darah'],
			'alamat' => $post['alamat']
		);
		if (isset($post['sim_b1'])) {
			$data['sim']=$post ['sim_b1'];
		}
		if (isset($post['sim_a'])) {
			$data['sim']=$post ['sim_a'];
		}
		if (isset($post['sim_c'])) {
			$data['sim']=$post ['sim_c'];
		}
		if (isset($post['kewarganegaraan'])) {
			$data['kewarganegaraan']=$post ['kewarganegaraan'];
		}
		$this->load->view('templates/auth_header', array('title'=>'konfirmasi data'));
		$this->load->view('auth/konfirmasi_data', $data);
		$this->load->view('templates/auth_footer');
	} 
	public function simpan_pendaftaran($data)
	{
		$this->db->insert('pendaftar',$data);
	}
}