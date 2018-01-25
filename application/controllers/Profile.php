<?php

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        //$this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        if ($this->form_validation->run()) {
            $password = $_POST['password'];
            if ($password == NULL) {
                $data_simpan = array(
                    'email' => $_POST['email'],
                    'username' => $_POST['username'],
                    'gender' => $_POST['gender'],
                    'alamat' => $_POST['alamat']
                );
                if ($this->user_model->ubah($_POST['id_user'], $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('profile');
                }
            } else {
                $data_simpan = array(
                    'email' => $_POST['email'],
                    'username' => $_POST['username'],
                    'password' => md5($_POST['password']),
                    'gender' => $_POST['gender'],
                    'alamat' => $_POST['alamat']
                );
                if ($this->user_model->ubah($_POST['id_user'], $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('profile');
                }
            }
        } else {
            $data_user = $this->user_model->get_byusername($this->session->userdata('username'));
            $data['row'] = $data_user->row();
            $data['isi'] = 'profile/ubah_user';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/v_dashboard', $data);
        }
    }

}
