<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); //memanggil method contructor pd controller
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('siswa_model');
        $this->load->model('cetak_model_siswa');
    }

    public function index()
    {
        $data = array(
            "title" => 'Data Siswa',
            "siswa" => $this->siswa_model->datatabels()
        );
        $this->load->view('admin/template/header_datatabels_pegawai',$data);
        $this->load->view('user/user',$data);
        $this->load->view('admin/template/footer_datatabels_pegawai');
        
    }

    //public function laporan_pdf($id){
        
      //  $this->load->library('pdf_siswa');

        //$data['siswa'] = $this->cetak_model_siswa->getdatabyID($id);

        //$this->pdf_pegawai->setPaper('A4', 'portrait');
        //$this->pdf_pegawai->filename = "laporan.pdf";
        //$this->pdf_pegawai->load_view('admin/laporansiswa', $data);
	//}
	public function cetak(){
        $this->load->library('pdf_siswa');
        $data['siswa'] = $this->Cetak_model_siswa->view();
        $this->pdf_siswa->setPaper('A4', 'portrait');
        $this->pdf_siswa->filename = "laporansiswa.pdf";
        $this->pdf_siswa->load_view('admin/siswa/laporansiswa',$data);
    }

	public function cetakLaporan($id){
        
        $this->load->library('pdf_siswa');
        $data['siswa'] = $this->Cetak_model_siswa->getdatabyID($id);
        $this->pdf_siswa->setPaper('A4', 'portrait');
        $this->pdf_siswa->filename = "laporansiswa.pdf";
        $this->pdf_siswa->load_view('admin/siswa/laporansiswa',$data);
	}
	



    public function detail($id_siswa){
        $data['title']= 'Detail Siswa';
        $data['siswa']= $this->siswa_model->getsiswaByID($id_siswa);
        $this->load->view("admin/siswa/detailsiswa",$data);
    }

}

/* End of file Controllername.php */
