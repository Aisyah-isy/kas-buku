<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')!='Admin'){
			redirect('home');
		}
    }

	public function index(){
        $this->db->select('*')->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
		$this->template->load('layout/template','admin/user_index', $data);
	}
    public function tambah(){
		$this->template->load('layout/template','admin/user_tambah');
	}

    public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user',$id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->template->load('layout/template','admin/user_edit', $data);
	}

    public function hapus($id){
        $where = array('id_user'=> $id);
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                    Syudah di hapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('User');   
    }
    public function update(){
		$this->User_model->update();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
                        Udah di update Bro!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('User');
	}
    public function simpan(){
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();

        if($cek <> null){
            $this->session->set_flashdata('alert', '
                 <div class="alert alert-danger alert-dismissible" role="alert">
                    Usernamenya Udah dipake Bro!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('User');   
        }

		$this->User_model->simpan();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
                        Udah kesimpen Bro!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('User');
	}
    
    
}
