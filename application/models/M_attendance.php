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


        function getDetailInfoAbsen( $id_infoabsen ){

            $dataInfoAbsen       = array();
            $dataDetailKehadiran = array();

            /**
             * 1. Ambil data informasi absen berdasarkan id_infoabsen
             * 2. Masukan data informasi absen ke dalam variabel $dataInfoAbsen 
             * 3. Ambil data detail absen berdasarkan id_infoabsen 
             * 4. Masukkan data detail absen ke dalam variabel $dataDetailKehadiran
             */

            // @TODO 1
                // Query : SELECT * FROM informasi_absen WHERE id_infoabsen = '$id_infoabsen'

                // opsi 1 
                $ambilInfoAbsen = $this->db->query("SELECT * FROM informasi_absen WHERE id_infoabsen = '$id_infoabsen'")->row_array();

                // opsi 2 
                // $kondisi = array('id_infoabsen' => $id_infoabsen);
                // $ambilInfoAbsen = $this->db->get_where('informasi_absen', $kondisi);

                // return dalam bentuk data lebih dari 1
                // ->result();            $row->kelas
                // ->result_array();      $row['kelas']

                // return dalam bentuk 1 data / 1 baris
                // ->row();             $row->kelas
                // ->row_array();       $row['kelas']
            
            // @TODO 2
                // array_push( $dataInfoAbsen, "Ulvia"  );
                // array_push( $dataInfoAbsen, "Tutik"  );
                
                $setDataInfoAbsen = array(

                    'tanggal'   => $ambilInfoAbsen['tanggal'],
                    'pengajar'  => $ambilInfoAbsen['nama_pengajar'],
                    'kelas'     => $ambilInfoAbsen['kelas'],
                    'jurusan'   => $ambilInfoAbsen['jurusan'],
                );
                array_push( $dataInfoAbsen, $setDataInfoAbsen );
            /** */

            // TODO 3
                $SQL = "SELECT a.id_detailabsen, a.id_infoabsen, a.keterangan, b.id_siswa, b.nama 
                        FROM detail_absen a, siswa b 
                        WHERE a.id_siswa = b.id_siswa AND a.id_infoabsen = '$id_infoabsen' AND keterangan != 'H'";
                $ambilDetailAbsen = $this->db->query( $SQL )->result();
            /** */

            // TODO 4
                foreach( $ambilDetailAbsen AS $rowDetail ) {

                    $setDetailAbsen = array(
                        'id_siswa'  => $rowDetail->id_siswa,
                        'nama'      => $rowDetail->nama,
                        'keterangan'=> $rowDetail->keterangan
                    );

                    array_push( $dataDetailKehadiran, $setDetailAbsen );
                }
            /** */ 
            
            $output = array( $dataInfoAbsen, $dataDetailKehadiran );
            // 0 = dataInfoAbsen | 1 = dataDetailKehadiran
            
            return $output;
        
        }
            
    }