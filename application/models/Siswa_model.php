<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Siswa_model extends CI_Model {
        
        public function getAllpegawai()
        {
            return $this->db->get('siswa')->result_array();
        }
        public function count_all(){
            return $this->db->count_all('siswa'); // Untuk menghitung semua data siswa
          }
        public function tambahdatakpw($upload){
            $data=array(
            "id_siswa"=>$this->input->post('id_siswa',true),
            "nama"=>$this->input->post('nama',true),
            "foto" => $upload ['file']['file_name'],
            "agama"=>$this->input->post('agama',true),
            "alamat"=>$this->input->post('alamat',true),
            "gender"=>$this->input->post('gender',true),
            "tgl_lahir"=>$this->input->post('tgl_lahir',true),
            "umur"=>$this->input->post('umur',true),
            "jurusan"=>$this->input->post('jurusan',true),
            "no_hp"=>$this->input->post('no_hp',true),
			"nama_ortu"=>$this->input->post('nama_ortu',true),
            "kelas"=>$this->input->post('kelas',true)
            );
            $this->db->insert('siswa', $data);
        }

        public function upload(){    
            $config['upload_path'] = './images/';    
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto')){
                $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
                return $return;
            }else{    
                $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
            }  
        }

        public function cariDataSiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama',$keyword);
            $this->db->or_like('id_siswa',$keyword);
            return $this->db->get('siswa')->result_array();
        }

        public function getpegawaiByID($id)
        {
            $query = $this->db->get_where('siswa', array('id_siswa'=>$id));
            return $query->row_array();
        }

        public function ubahdatapegawai(){
            $data = [
                "nama"=>$this->input->post('nama',true),
                "alamat"=>$this->input->post('alamat',true),
                "umur"=>$this->input->post('umur',true),
                "agama"=>$this->input->post('agama',true),
                "gender"=>$this->input->post('gender',true),
                "nama_ortu"=>$this->input->post('nama_ortu',true),
                "jurusan"=>$this->input->post('jurusan',true),
                "kelas"=>$this->input->post('kelas',true),
                "no_hp"=>$this->input->post('no_hp',true),
                "tgl_lahir"=>$this->input->post('tgl_lahir',true)
                ];
            $this->db->where('id_siswa', $this->input->post('id_siswa'));
            $this->db->update('siswa', $data);
        }    

        public function cariDataPegawai(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama_siswa',$keyword);
            $this->db->or_like('id_siswa',$keyword);
            $this->db->or_like('alamat',$keyword);
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

        public function datatabelsUserReg(){
            $register = 0;
            $query = $this->db->order_by('id_user','DESC')->get_where('user',array('Status' => $register));
            return $query->result();
        }

        public function datatabelsUserUnreg(){
            $register = 1;
            $query = $this->db->order_by('id_user','DESC')->get_where('user',array('Status' => $register));
            return $query->result();
        }

        public function ubahStatus(){
            $data = [
                "Status" => $this->input->post("Status",true)
            ];
            $this->db->where('id_user',$this->input->post('id_user'));
            $this->db->update('user');

        }
        public function getsiswaByID($id_siswa)
        {
            return $this->db->get_where('siswa',array('id_siswa' => $id_siswa));
        }

    }
    
    /* End of file kepegawaian_model.php */  
?>