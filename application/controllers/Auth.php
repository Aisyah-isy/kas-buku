<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index(){
        $this->load->view('loginn');
        
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = ($this->input->post('password'));
        $this->db->from('user')->where('username', $username);
        $data = $this->db->get()->row();

        if($data == NULL){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                        Username tidak ada!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('auth');
            }
            else if($password == $data->password){
            $data = array(
                'id_user'   => $data->id_user,
                'nama'      => $data->nama,
                'username'  => $data->username,
                'level'     => $data->level,
            );
            $this->session->set_userdata($data);
            redirect('home');
        }else{
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                        Password salah!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('auth');
            
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
