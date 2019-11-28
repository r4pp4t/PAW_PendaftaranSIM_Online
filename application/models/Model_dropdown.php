<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_dropdown extends CI_Model
{
	public function tampil_data()
	{
		$query = $this->db->get('polda_kedatangan');
		return $query;
	}
	public function tampil_data_chained($id)
	{
		$query = $this->db->query("SELECT * FROM satpas_kedatangan where id_polda = '$id'");
		return $query;
	}
	public function tampil_data_alamat($id)
	{
		$query = $this->db->query("SELECT * FROM satpas_kedatangan where id_satpas = '$id'");
		return $query;
	}
}