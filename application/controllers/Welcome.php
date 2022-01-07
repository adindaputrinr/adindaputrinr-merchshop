<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model("data");
}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function pages($judul=''){
		if($judul=="kategoribyproduk"){
			$sData = array();
			$data=$this->data->kategoribyproduk();
			foreach($data as $rs){
				$arr_row=array();
				$arr_row['id'] = (int)$rs->idkategori;
				$arr_row['nama'] = $rs->kategori."";
				$sData[] = $arr_row;
			}
			header('Content-Type: application/json');
			echo json_encode($sData, JSON_PRETTY_PRINT);
		}
		}
	}
