<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		echo "Selamat Datang.. selamat belajar Web Programming";
	}

	public function penjumlahan($n1, $n2)
	{
	$this->load->model('Model_latihan1');
	$data['nilai1'] = $n1;
	$data['nilai2'] = $n2;
	$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
	$this->load->view('view-latihan1', $data);
	}
}
