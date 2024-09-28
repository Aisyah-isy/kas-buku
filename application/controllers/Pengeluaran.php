<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }

	public function index()
	{
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        if($level=="User"){
            $this->db->where('username', $username);
        }
        $this->db->order_by('tanggal','DESC');
        $pengeluaran = $this->db->get()->result_array();
        $data = array(
            'pengeluaran' => $pengeluaran
        );
		$this->template->load('layout/template','pengeluaran_index',array_merge($data));
	}

    public function simpan(){
        $data = array(
            'keterangan'    => $this->input->post('keterangan'),
            'nominal'       => $this->input->post('nominal'),
            'tanggal'       => $this->input->post('tanggal'),
            'username'      => $this->session->userdata('username'),
            'jenis_transaksi'=> 'Pengeluaran'
        );
        $this->db->insert('transaksi',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
                        Berhasil Input Pemasukann kakk!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('Pengeluaran');
    }

    public function hapus($id){
        $where = array('transaksi_id'=> $id);
        $this->db->delete('transaksi', $where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                    Syudah di hapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('Pengeluaran');   
    }
}
