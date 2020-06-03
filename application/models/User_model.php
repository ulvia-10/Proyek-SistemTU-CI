<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User_model extends CI_Model {
        
        public function getAllpegawai()
        {
            return $this->db->get('siswa')->result_array();
        }
        public function getuserByID($id)
        {
            $query = $this->db->get_where('siswa', array('id_siswa'=>$id));
            return $query->row_array();
        }
        public function cariDataSiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama_siswa',$keyword);
            $this->db->or_like('id_siswa',$keyword);
            return $this->db->get('siswa')->result_array();
        }
        public function hapusdatakpw($id){
            $this->db->where('id_siswa',$id);
            $this->db->delete('siswa');
            redirect('Siswa','refresh');
        }

        public function datatabels(){
            $query = $this->db->order_by('id_siswa', 'ASC')->get('siswa');
            return $query->result(); 
        }
        public function count(){
            $query= $this->db->get('siswa');
            echo $query->num_rows();
        }
    

    }
    
    /* End of file kepegawaian_model.php */  
?>