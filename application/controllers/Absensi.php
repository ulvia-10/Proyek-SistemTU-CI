<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Absensi extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Absensi_model');
            $this->load->model('Cetak_model_absensi');
        }
        
    
        public function index()
        {
            $data['title'] = 'SITU SMANSA';
            $data ['absensi'] = $this->Absensi_model->getAllabsensi();
            if($this->input->post('keyword')){
                #code...
                $data['absensi']=$this->Absensi_model->cariDataSiswa();
            }
            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view("admin/absensi/listabsensi",$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
          
        }

        public function tambah()
        {
            $data['title']='Form Menambahkan Data absensi';
        
            $this->form_validation->set_rules('tgl_absen','tgl_absen','required');
            $this->form_validation->set_rules('hadir','hadir');
            $this->form_validation->set_rules('sakit','sakit');
            $this->form_validation->set_rules('izin','izin');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/absensi/tambahabsensi", $data);
            }
            else{
                $this->Absensi_model->tambahdataabsensi();
                redirect('Absensi','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Absensi';
            $data['absensi']= $this->Absensi_model->getabsensiByID($id);
            $data['siswa']=$this->Absensi_model->getabsensiByID2($id);
            $this->load->view("admin/absensi/detailabsensi",$data);
        }
		
		public function detail2($id)
        {
            $data['title']='Detail Absensi';
            $data['absensi']= $this->Absensi_model->getabsensiByID($id);
            $data['siswa']=$this->Absensi_model->getabsensiByID2($id);

            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view('admin/absensi/absen',$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Absensi';
            $this->form_validation->set_rules('id_siswa','id_siswa','required');
            $this->form_validation->set_rules('tgl_absen','tgl_absen','required');
            $this->form_validation->set_rules('hadir','hadir','required');
            $this->form_validation->set_rules('sakit','sakit','required');
            $this->form_validation->set_rules('izin','izin','required');

            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['absensi']= $this->Absensi_model->getabsensiByID($id);        
                $this->load->view("admin/absensi/editabsensi", $data);
            }
            else{
            #code...
                $this->Absensi_model->ubahdataabsensi();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('Absensi','refresh');
            }
        }   

        public function hapus($id){
            $this->Absensi_model->hapusdatakpw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('Absensi','refresh');
        }

		public function absen($id){
            $data ['title']='Form Edit Data Absensi';
            $this->form_validation->set_rules('tgl_absen','tgl_absen');
            $this->form_validation->set_rules('id_siswa','id_siswa','required');
            $this->form_validation->set_rules('hadir','hadir','required');
            $this->form_validation->set_rules('sakit','sakit','required');
            $this->form_validation->set_rules('izin','izin','required');

            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['absensi']= $this->Absensi_model->getabsensiByID($id);        
                $this->load->view("admin/absensi/editabsensi", $data);
            }
            else{
            #code...
                $this->Absensi_model->ubahdataabsensi();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('Absensi','refresh');
            }
        }   
        
		public function CetakFormAbsensi(){
        
            $this->load->library('pdf_absensi');
            $data['absensi'] = $this->Cetak_model_absensi->view();
            $this->pdf_absensi->setPaper('A4', 'portrait');
            $this->pdf_absensi->filename = "cetakform.pdf";
            $this->pdf_absensi->load_view('admin/absensi/cetakform',$data);
        }
		
        public function CetakLaporan(){
        
            $this->load->library('pdf_absensi');
            $data['absensi'] = $this->Cetak_model_absensi->view();
            $this->pdf_absensi->setPaper('A4', 'portrait');
            $this->pdf_absensi->filename = "laporanabsensi.pdf";
            $this->pdf_absensi->load_view('admin/absensi/laporanabsensi',$data);
        }
		
	}
    
    /* End of file pegawai.php */
    
?>