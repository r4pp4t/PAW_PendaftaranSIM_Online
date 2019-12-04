<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_permohonan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_dropdown');
	}


	public function index(){


		if($this->form_validation->run()==false){
			$data['dropdown'] = $this->Model_dropdown->tampil_data();
			$data2['title']  = 'Data permohonan';
			$this->load->view('templates/auth_header',$data2);
			$this->load->view('auth/data_permohonan',$data);
			$this->load->view('templates/auth_footer');

		}
	}
	public function tampil_chained()
	{
		$id = $_POST['id'];
		$dropdown_chained = $this->Model_dropdown->tampil_data_chained($id);
		foreach ($dropdown_chained->result() as $baris) {
			echo "<option value='".$baris->id_satpas."'>".$baris->satpas_kedatangan."</option>";
		}
	}
	public function tampil_alamat()
	{
		$id = $_POST['id'];
		$dropdown_chained = $this->Model_dropdown->tampil_data_alamat($id);
		foreach ($dropdown_chained->result() as $baris) {
			echo "<option value='".$baris->id_satpas."'>".$baris->alamat_satpas."</option>";
		}
	}
	public function search(){
    $nik = $this->input->post('nik');
    
    $ktp = $this->M_pos->viewByNik($nik);
    
    if( ! empty($ktp)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $ktp->nama, // Set array nama dengan isi kolom nama pada tabel siswa
        'alamat' => $ktp->alamat, // Set array jenis_kelamin dengan isi kolom alamat pada tabel siswa
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
    
}