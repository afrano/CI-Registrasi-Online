<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('berhasil_login')) {
            redirect('dashboard');
        } else {
            $this->load->view('login/v_login');
        }
    }

    function cek_login() {
        $this->form_validation->set_rules('email', 'Input Username', 'valid_email|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Input Password', 'required|min_length[3]');
        if ($this->form_validation->run()) {
//            Proses Login
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            // sesuaikan dengan tabel database
            $query = $this->db->get_where('user', array('email' => $email, 
                'password' => md5($password),'status'=>1)
                    );
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $data_sesi = array(
                    'email' => $email, 'username' => $row->username, 'hak_akses' => $row->hak_akses,
                    'berhasil_login' => true
                );
                $this->session->set_userdata($data_sesi);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan_error', 'Gagal Login Username/Password salah');
                redirect('login');
            }
        } else {
//            Jika Validasi Gagal Tampilkan Halaman Login Dan Error
            $this->load->view('login/v_login');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
