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
}