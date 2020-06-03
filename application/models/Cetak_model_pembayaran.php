<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model_pembayaran extends CI_Model {
    public function view(){

        // SELECT a.id_siswa,a.nama,b.id_transaksi,b.tgl_bayar,b.status FROM siswa a 
        //JOIN transaksi b ON a.id_siswa = b.id_siswa
        
        // Opsi 1
        // $this->db->select('a.id_siswa,a.nama,b.id_transaksi,b.tgl_bayar,b.status')->from('siswa a');
        // $this->db->join('transaksi b', 'a.id_siswa = b.id_siswa');

        // Opsi 2 
        $SQL = "SELECT a.id_siswa,a.nama,b.id_transaksi,b.tgl_bayar,b.status FROM siswa a JOIN transaksi b ON a.id_siswa = b.id_siswa";
        $query = $this->db->query( $SQL );

        return $query->result();

        // $this->db->select('id_transaksi,id_siswa,status,tgl_bayar');
        // return $this->db->get('transaksi')->result_array();
    }
    public function getdatabyID($id){
        return $this->db->get_where('transaksi', array('id_transaksi' => $id))->result();
    }
}