<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {
	public function kategoribyproduk() {
	$data=$this->db->query("select distinct idkategori,kategori from produk where st='1' and thumbnail<>''");
	$this->db->close();
	return $data->result();
}
}