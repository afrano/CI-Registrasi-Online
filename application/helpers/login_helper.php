<?php

function cek_login() {
    $ci = & get_instance();
    if (!$ci->session->userdata('berhasil_login')) {
        $ci->session->set_flashdata('pesan_error', 'Anda Harus Login');
        redirect('login');
    }
}

function cek_hakakses($akses = array()) {
    $ci = & get_instance();
    if (!in_array($ci->session->userdata('hak_akses'), $akses)) {
        $ci->session->set_flashdata('pesan_error', 'Anda Tidak Boleh Mengakses Modul ini');
        redirect('dashboard');
    }
}
