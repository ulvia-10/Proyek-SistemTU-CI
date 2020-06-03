<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Attendance extends CI_Controller {

        function __construct(){

            parent::__construct();

            // load model 
            $this->load->model('M_attendance');
        } 


        function index() {

            $data['title'] = 'SITU SMANSA';
            // $data ['absensi'] = $this->Absensi_model->getAllabsensi();
            $data['dataAbsen'] = $this->M_attendance->getDataAbsen();
           
            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view("admin/attendance/V_history_attendance",$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
        }



        // tambah absen baru 
        function viewAbsensiBaru(){

            $data['title'] = 'SITU SMANSA';
            // $data ['absensi'] = $this->Absensi_model->getAllabsensi();
            $data['statusList'] = false;

            if ( $this->input->get('tanggal') ){

                $getKelas = $this->input->get('kelas');
                $getJurusan = $this->input->get('jurusan');

                $data['listSiswa'] = $this->M_attendance->getDataSiswa( $getKelas, $getJurusan );
                $data['statusList'] = true;
            }
           
            $this->load->view('admin/template/header_datatabels_pegawai',$data);
            $this->load->view("admin/attendance/V_add_attendance",$data);
            $this->load->view('admin/template/footer_datatabels_pegawai');
        }


        function actInsert(){

            $this->M_attendance->actAdvanceInsert();
        }
        	
    }