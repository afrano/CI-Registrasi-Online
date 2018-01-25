<?php

class User_model extends ci_model {

    public $nama_tabel = 'user';

    function __construct() {
        parent::__construct();
    }

    /*
      Perhatikan JOIN parameter ke 2 harus sesuai dengan tabel yang di join
     *      */

    function get_all() {
        $this->db->join('akses', "akses.id_akses = $this->nama_tabel.hak_akses", 'LEFT');
        $query = $this->db->get($this->nama_tabel);
        return $query;
    }

    function get_byid($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function get_byusername($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('username' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function tambah($data_user) {
        $query = $this->db->insert($this->nama_tabel, $data_user);
        if ($query)
            return $query;
        return false;
    }

    /*
     *
     * Sesuaikan variable id_ser dengan primarykey tabel  
     */

    function ubah($id_user, $data_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update($this->nama_tabel, $data_user, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function hapus($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->delete($this->nama_tabel);
        if ($query)
            return $query;
        return false;
    }

}
