<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Absensi_model extends CI_Model {
        
        public function getAllabsensi()
        {
            return $this->db->get('absensi')->result_array();
        }

        public function getabsensiByID($id)
        {
            $query = $this->db->get_where('absensi', array('id_absensi'=>$id));
            return $query->row_array();
        }
        public function getabsensiByID2($id)
        {
            $query = $this->db->get_where('siswa', array('id_siswa'=>$id));
            return $query->row_array();
        }
		function get_absen(){
			$query = $this->db->get('absen');
			return $query->result_array();
		}
        public function datatabels(){
            $query = $this->db->order_by('id_absensi', 'ASC')->get('absensi');
            return $query->result(); 
        }
        public function tambahdataabsensi(){
            $data=[
            // "id_siswa"=>$this->input->post('id_siswa',true),
            "tgl_absen"=>$this->input->post('tgl_absen',true),
            "hadir"=>$this->input->post('hadir',true),
            "izin"=>$this->input->post('izin',true),
            "sakit"=>$this->input->post('sakit',true)
            ];
            $this->db->insert('absensi', $data);
        }
        public function ubahdataabsensi(){
            $data = [
                "hadir"=>$this->input->post('hadir',true),
                "izin"=>$this->input->post('izin',true),
                "sakit"=>$this->input->post('sakit',true),
                "tgl_absen"=>$this->input->post('tgl_absen',true)
            ];
            $this->db->where('id_absensi', $this->input->post('id_absensi'));
            $this->db->update('absensi', $data);
        }    
        public function ubahStatus(){
            $data = [
                "Status" => $this->input->post("Status",true)
            ];
            $this->db->where('id_absensi',$this->input->post('id_absensi'));
            $this->db->update('user');

        }
        public function cariDataAbsenSiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('id_absensi',$keyword);
            $this->db->or_like('hadir',$keyword);
            // $this->db->or_like('alamat',$keyword);
            return $this->db->get('absensi')->result_array();
        }

        public function hapusdataabsensi($id){
            $this->db->where('id_absensi',$id);
            $this->db->delete('absensi');
            redirect('absensi','refresh');
        }

    }
    
    /* End of file kepegawaian_model.php */  
?>
