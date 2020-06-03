<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pembayaran_model extends CI_Model {
        
        public function getAllPembayaran()
        {
            // return $this->db->get('transaksi')->result_array();
            $query = $this->db->query('SELECT a.id_transaksi,b.nama,a.tgl_bayar,b.id_siswa from transaksi a, siswa b where a.id_siswa = b.id_siswa ');
            return $query->result_array();
        }
        //dari detail transaksi
        public function getAllPembayaran2()
        {
            return $this->db->get('detail_transaksi')->result_array();
        }

        public function cariDataBayar(){
            $keyword=$this->input->post('keyword');
            $this->db->like('tgl_bayar',$keyword);
            return $this->db->get('transaksi')->result_array();
        }


        // Punyakkuuu (Model untuk insert data ke db)
        public function M_tambah(){
            $data = array(
                // Kolom di table db     nama form textbox (name)
                'id_transaksi' => $this->input->post('id_transaksi'),
                'tgl_bayar'   => $this->input->post('tgl_bayar'),
                'qty_spp'   => $this->input->post('qty_spp'),
                'harga_spp' => $this->input->post('harga_spp')
            );
        
            $this->db->insert('detail_transaksi', $data);
        }
        public function M_tambahTransaksi(){
            $data = array(
                // Kolom di table db        nama form textbox (name)
                'id_transaksi' => $this->input->post('id_transaksi'),
                'status' => $this->input->post('status')
            );
            $this->db->insert('transaksi', $data);
        }

        public function get_bayar(){
            $sql= "SELECT id_dtltransaksi, qty_spp, harga_spp, (qty_spp * harga_spp) as total_bayar FROM detail_transaksi ORDER BY id_dtltransaksi";
            return $this->db->query($sql);
        }

        public function getPembayaranByID($id)
        {
            $query = $this->db->get_where('transaksi', array('id_transaksi'=>$id));
            return $query->row_array();
        }
        public function getPembayaranByID2($id)
        {
            $query = $this->db->get_where('detail_transaksi', array('id_dtltransaksi'=>$id));
            return $query->row_array();
        }
        public function datatabels(){
            $query = $this->db->order_by('id_transaksi', 'ASC')->get('transaksi');
            return $query->result(); 
        }
    public function hapusdatatransaksi($id){
        $this->db->where('id_transaksi',$id);
        $this->db->delete('transaksi');
        redirect('pembayaran','refresh');
    }
    public function ubahdatabayar(){
        $data = [
         
            "tgl_bayar"=>$this->input->post('tgl_bayar',true),
            "status"=>$this->input->post('status',true)
            ];
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('transaksi', $data);
    }    
    }
    
    /* End of file kepegawaian_model.php */  
?>