<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model {
 
    function login($username,$password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function register(){
        $data=[
            "Username" => $this->input->post("username", true),
            "Password" => $this->input->post("password", true),
            "Active" => 0,
            "Level" => 'Admin'
        ];

        $this->db->insert('user', $data);
    }
}
/* End of file ModelName.php */
?>
