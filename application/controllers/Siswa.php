<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Siswa extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Siswa_model');
            $this->load->model('Cetak_model_siswa');
            $this->load->library('form_validation');
            
        }
        public function index()
        {
            $data= array(
            'title' => 'Siswa Page | SITU',
            'siswa'=>$this->Siswa_model->datatabels()
            );
            $data ['siswa'] = $this->Siswa_model->getAllpegawai();
            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view('admin/siswa/listsiswa',$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
            
        }

        public function dashboard()
        {
            $data['title'] = 'Siswa Page| SITU';
            $data ['siswa'] = $this->Siswa_model->getAllpegawai();
            if($this->input->post('keyword')){
                #code...
                $data['siswa']=$this->Siswa_model->cariDataSiswa();
            }
            $this->load->view("admin/siswa/listsiswa",$data);
        }
        public function tambah()
        {

            $data ['title']='Form Menambahkan Data Siswa';

            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('id_siswa','Id_siswa','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
			$this->form_validation->set_rules('agama','Agama','required');
			$this->form_validation->set_rules('umur','Umur','required');
			$this->form_validation->set_rules('jurusan','Jurusan','required');
			$this->form_validation->set_rules('gender','Gender','required');
            $this->form_validation->set_rules('nama_ortu','Nama_ortu','required');
            $this->form_validation->set_rules('kelas','kelas','required');

            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/siswa/tambahsiswa");
            }
            else{
                $upload = $this->Siswa_model->upload();
                if($upload ['result'] == 'success'){
                    $this->Siswa_model->tambahdatakpw($upload);
                    $this->session->set_flashdata('flash-data','ditambahkan');
                    redirect('Siswa','refresh');
                }else{
                    echo $upload['error'];
                }
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Siswa ';
            $data['siswa']= $this->Siswa_model->getpegawaiByID($id);
            $this->load->view("admin/siswa/detailsiswa",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Siswa';
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('alamat','alamat','required');
            $this->form_validation->set_rules('umur','umur','required');
            $this->form_validation->set_rules('agama','agama','required');
            $this->form_validation->set_rules('gender','gender','required');
            $this->form_validation->set_rules('nama_ortu','nama_ortu','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('kelas','kelas','required');
            $this->form_validation->set_rules('no_hp','no_hp','required');
            $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['siswa']= $this->Siswa_model->getpegawaiByID($id);        
                $this->load->view("admin/siswa/editsiswa", $data);
            }
            else{
            #code...
                $this->Siswa_model->ubahdatapegawai();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('Siswa','refresh');
            }
        }   

        public function hapus($id){
            $this->Siswa_model->hapusdatakpw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('Siswa','refresh');
        }
    public function cetakLaporan(){
        
        $this->load->library('pdf_siswa');
        $data['siswa'] = $this->Cetak_model_siswa->view();
        $this->pdf_siswa->setPaper('A4', 'portrait');
        $this->pdf_siswa->filename = "laporansiswa.pdf";
        $this->pdf_siswa->load_view('admin/siswa/laporansiswa',$data);
    }
    public function CetakSiswa($id_siswa){

        $this->load->library('pdf_siswa');
        $data['getDetailSiswa']  = $this->Siswa_model->getsiswaByID($id_siswa)->row();
       
        $nis = $data['getDetailSiswa']->id_siswa;
        // $data['transaksi'] = $this->Cetak_model_pembayaran->view();
        $this->pdf_siswa->setPaper('A4', 'portrait');
        $this->pdf_siswa->set_option('isRemoteEnabled', TRUE);
        $this->pdf_siswa->filename = "BIO-SISWA_".$nis."-_".date('Y-m-d').".pdf";
        $this->pdf_siswa->load_view("admin/siswa/laporan",$data);

    }

    
	

	
}
    
?>
