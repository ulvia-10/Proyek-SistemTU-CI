<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model_absensi extends CI_Model {

    public function view()
    {
        $this->db->select('id_siswa,tgl_absen,kelas,hadir,izin,sakit');
        return $this->db->get('absensi')->result_array();
    }

    public function getdatabyID($id){
        return $this->db->get_where('absensi', array('id_absensi' => $id))->result();
        
    }
}

