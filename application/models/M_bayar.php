<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_bayar extends CI_Model {
        public function get_bayar( $kondisi = null, $id = null ){

            if ( $kondisi == "detail" ) {

                $sql= "SELECT a.id_transaksi,a.id_siswa,a.tgl_bayar,
                              b.qty_spp,a.status,b.harga_spp,(b.qty_spp * b.harga_spp) as total_bayar, 
                              c.nama, c.kelas, c.jurusan 
                        FROM transaksi a, detail_transaksi b, siswa c 
                        where a.id_transaksi = b.id_transaksi and a.id_siswa = c.id_siswa AND a.id_transaksi = '$id'";
            } else {

                $sql= "SELECT a.id_transaksi,a.id_siswa,a.tgl_bayar,b.qty_spp,a.status,b.harga_spp,(b.qty_spp * b.harga_spp) as total_bayar, c.nama FROM transaksi a, detail_transaksi b, siswa c where a.id_transaksi = b.id_transaksi and a.id_siswa = c.id_siswa";
            }
            
            return $this->db->query($sql);
        }
    }
?>
