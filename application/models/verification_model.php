<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class verification_model extends CI_Model {
    public function getactive(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('Active', 3);

        $query= $this->db->get();
        return $query->result_array();
    }

    public function verification($id){
        $hasil = $this->db->query("UPDATE user SET Active='1' WHERE id_user=$id");
        return $hasil;
    }

}

/* End of file verification_model.php */
