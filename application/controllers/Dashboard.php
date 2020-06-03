<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function index(){
        $data['title']="Home | SITU";
        $this->load->model('M_home');
        $data = array (
            'home' =>  $this->M_home->get_home(),
            'getAbsensi' => $this->M_home->M_getAbsensi(),
            'getSiswa' => $this->M_home->M_getSiswa(),
            'getTransaksi' => $this->M_home->M_getTransaksi()
        );
        
        $this->load->view('dashboard', $data);

    }
}
?>
