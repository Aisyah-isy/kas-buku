<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('Transaksi_model');
		$this->load->library('Pdf');
        if($this->session->userdata()==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->template->load('layout/template','dashboard');
	}
	public function laporan(){
		$tanggal1 = $this->input->post('tanggal1');
		$tanggal2 = $this->input->post('tanggal2');
		$this->db->from('transaksi');
        $this->db->where("DATE_FORMAT(tanggal,'%y-%m') >=",$tanggal1);
		$this->db->where("DATE_FORMAT(tanggal,'%y-%m') <=",$tanggal2);
		// yutup 10.30
	}
}
