<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_attendance extends CI_Model {

        function __construct(){

            parent::__construct();
        } 

        function getDataSiswa($getKelas, $getJurusan){

            // menampilkan data siswa berdasarkan kelas dan jurusan
            return $this->db->get_where('siswa', array('jurusan' => $getJurusan, 'kelas' => $getKelas));
        }


        function getDataAbsen(){

            $getAbsen = $this->db->get('informasi_absen');
            $dataAbsen = array();
            foreach ( $getAbsen->result_array() AS $row ) {

                $alpha = 0;
                $izin = 0;
                $sakit = 0;
                // ambil data detail 
                $getDataDetail = $this->db->get_where('detail_absen', array('id_infoabsen' => $row['id_infoabsen']));
                if ( $getDataDetail->num_rows() > 0 ) {

                    foreach ( $getDataDetail->result_array() AS $rowDetail ) {

                        if ( $rowDetail['keterangan'] == "A" ) $alpha++;
                        if ( $rowDetail['keterangan'] == "I" ) $izin++;
                        if ( $rowDetail['keterangan'] == "S" ) $sakit++;
                    }
                }
                
                array_push( $dataAbsen, array(

                    'id_infoabsen' => $row['id_infoabsen'],
                    'tanggal'      => $row['tanggal'],
                    'nama_pengajar'=> $row['nama_pengajar'],
                    'kelas'        => $row['kelas'],
                    'jurusan'      => $row['jurusan'],
                    'alpha'     => $alpha,
                    'sakit'     => $sakit,
                    'izin'      => $izin,
                    
                ) );
            }

            return $dataAbsen;
        }


        // insert absen 
        function actAdvanceInsert(){

            /** Insert tabel informasi absen */
            $dataInfo = array(
                'tanggal'       => $this->input->post('tanggal'),
                'nama_pengajar' => $this->input->post('leading'),
                'kelas'         => $this->input->post('kelas'),
                'jurusan'       => $this->input->post('jurusan')
            );

            $this->db->insert('informasi_absen', $dataInfo);
            $ambilLastId = $this->db->insert_id();
            // - - - -


            /** Insert tabel detail absen */
            $dataDetail = array();
            
            $getDataSiswa = $this->getDataSiswa($dataInfo['kelas'], $dataInfo['jurusan']);
            foreach ( $getDataSiswa->result_array() AS $row ) {
                $keterangan = $this->input->post('keterangan-'. $row['id_siswa']);
                $data = array(

                    'id_infoabsen'  => $ambilLastId,
                    'id_siswa'      => $this->input->post('id_siswa-'. $row['id_siswa']), 
                    'keterangan'    => ($keterangan) ? $keterangan : 'H', 
                );
                
                array_push( $dataDetail, $data );
            }

            // exec - insert
            $this->db->insert_batch('detail_absen', $dataDetail);
            redirect('attendance');


        }


        // 
        /**
         * 
         *  1. Foreach / tampilkan data siswa 
         *  2. Foreach data detail absen by id siswa (id_siswa didapatkan pada poin nomor 1)
         *  3. Keterangan dia alpha ? iizzin ? sakit ?
         * 
         */

    }