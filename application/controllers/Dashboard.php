<?php

class Dashboard extends CI_Controller{
    function __construct() {
        parent::__construct();
        cek_login();
    }
    function index(){
        $this->load->view('dashboard/v_dashboard');
    }
}
