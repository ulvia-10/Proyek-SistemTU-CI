<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    // Dashbard Model 
    class M_home extends CI_Model {
        public function get_home(){
            $sql = "SELECT COUNT(id_siswa) from siswa;";
            return $this->db->query($sql);
        }

        public function M_getAbsensi()
        {
            $query = $this->db->get('detail_absen');
            return $query->num_rows();
        }
        public function M_getSiswa()
        {
            $query = $this->db->get('siswa');
            return $query->num_rows();
        }
        public function M_getTransaksi()
        {
            $query = $this->db->get('transaksi');
            return $query->num_rows();
        }

        }
        ?>