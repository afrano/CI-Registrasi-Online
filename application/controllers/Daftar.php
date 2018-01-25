<?php

class Daftar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $this->form_validation->set_rules('username', 'namauser', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'username' => $_POST['username'],
                'gender' => ($_POST['gender']),
                'alamat' => $_POST['alamat'],
                'hak_akses' => 2,
                'status' => 0,
            );

            if ($this->user_model->tambah($data_simpan)) {
                $this->session->set_flashdata('pesan_error', 'User Berhasil DIsimpan');
                redirect('login');
            } else {
                $this->session->set_flashdata('pesan_error', 'User Gagal Disimpan');
                redirect('login');
            }
        } else {
            $data['isi'] = 'daftar/tambah_user';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/v_dashboard', $data);
        }
    }

}
