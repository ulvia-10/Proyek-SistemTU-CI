<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_bayar extends CI_Controller {

    public function __construct(){

        parent::__construct();

        // load model
        $this->load->model('M_bayar');
    }

    public function bayar(){
        $data['title']="History Pembayaran | SITU ";
        
        $data['bayar'] = $this->M_bayar->get_bayar(); 
        $this->load->view('admin/template/header_datatabels_pegawai',$data);
        $this->load->view('V_bayar', $data);
        $this->load->view('admin/template/footer_datatabels_pegawai');
      
    }


    public function CetakKwitansi( $id_transaksi ){

        $this->load->library('pdf_pembayaran');
        
        $data['getDetailPembayaran']  = $this->M_bayar->get_bayar('detail', $id_transaksi)->row();

        $nis = $data['getDetailPembayaran']->id_siswa;
        // $data['transaksi'] = $this->Cetak_model_pembayaran->view();
        $this->pdf_pembayaran->setPaper('A4', 'portrait');
        $this->pdf_pembayaran->set_option('isRemoteEnabled', TRUE);
        $this->pdf_pembayaran->filename = "KWT-SPP_".$nis."-_".date('Y-m-d').".pdf";
        $this->pdf_pembayaran->load_view("admin/pembayaran/laporanpembayaran_kwitansi",$data);



        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($aData['html']);
        // $dompdf->set_option('isRemoteEnabled', TRUE);
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // $dompdf->stream();
    }
}
?>
