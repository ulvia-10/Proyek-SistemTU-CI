<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model_siswa extends CI_Model {

    public function view()
    {
        $this->db->select('nama,id_siswa,umur,agama,tgl_lahir,alamat,gender,nama_ortu,jurusan');
        return $this->db->get('siswa')->result_array();
    }

    public function getdatabyID($id){
        return $this->db->get_where('siswa', array('id_siswa' => $id))->result();
        
    }
}

