<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pembayaran extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();

            // panggil model
            $this->load->model('Pembayaran_model');
            $this->load->model('Cetak_model_pembayaran');
         
        }

        public function index()
        {
            $data['title'] = 'Pembayaran | SITU';
            $data ['transaksi'] = $this->Pembayaran_model->getAllPembayaran();
            if($this->input->post('keyword')){
                #code...
                $data['transaksi']=$this->Pembayaran_model->cariDataBayar();
            }
            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view('admin/pembayaran/listpembayaran',$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
        }

        public function edit($id){
            $data ['title']='Form Edit Data Transaksi';
            $this->form_validation->set_rules('tgl_bayar','tgl_bayar','required|date');
            $this->form_validation->set_rules('status','status','required');
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['transaksi']= $this->Pembayaran_model->getPembayaranByID($id);        
                $this->load->view("admin/pembayaran/editpembayaran", $data);
            }
            else{
            #code...
                $this->Pembayaran_model->ubahdatabayar();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('Pembayaran','refresh');
            }
        }   

        public function hapus($id){
            $this->Pembayaran_model->hapusdatatransaksi($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('Pembayaran','refresh');
        }

        // Get semua data pembayaran di table
        public function tambah()
        {
            $data ['detail_transaksi'] = $this->Pembayaran_model->getAllPembayaran2();
            $data ['title']='Form Menambahkan Pembayaran SPP';
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('qty_spp','qty_spp');
            $this->form_validation->set_rules('harga_spp','harga_spp');
            if ($this->form_validation->run() ==FALSE){
                $this->load->view("admin/pembayaran/tambahpembayaran");
            }
            else{
                $this->Pembayaran_model->tambah();
                redirect('C_bayar');
            }
        }

        // Function Tambah ke table di db
        public function tambahBayar()
        {
            $this->Pembayaran_model->M_tambah();
            redirect('Pembayaran');
        }
        public function tambahTransaksi()
        {
            $this->Pembayaran_model->M_tambahTransaksi();
            redirect('Pembayaran');
        }
        
		public function CetakLaporan(){
            $this->load->library('pdf_pembayaran');
            $data['transaksi'] = $this->Cetak_model_pembayaran->view();
            $this->pdf_pembayaran->setPaper('A4', 'portrait');
            $this->pdf_pembayaran->filename = "laporanSPP.pdf";
            $this->pdf_pembayaran->load_view("admin/pembayaran/laporanpembayaran",$data);
        }
	
        public function detail($id)
        {
            $data['title']='Detail Pembayaran SPP';
            $data['transaksi']= $this->Pembayaran_model->getPembayaranByID($id);
            $this->load->view("admin/pembayaran/detailpembayaran",$data);
        }

    }
?>
