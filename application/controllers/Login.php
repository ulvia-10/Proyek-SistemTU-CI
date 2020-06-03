<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Login_model');
    
    }
    
    public function index()
    {
        $data ['title']='Login Page | SITU ';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/index');
        $this->load->view('admin/_partials/js');
    }

    public function proses_login()
    {
        $username=htmlspecialchars($this->input->post('uname1'));
        $password=htmlspecialchars($this->input->post('pwd1'));
        $cek_login=$this->Login_model->login($username,$password);

        if($cek_login)
        {
            foreach($cek_login as $row);
                #code...
                $this->session->set_userdata('Level',$row->level);
            if ($this->session->userdata('Level') == 'Admin') {
                # code...
                redirect('Dashboard');
            }
        }
    
        else{
            $data['pesan'] ='username dan password anda salah';
            $data['title'] ="Login | SITU Page ";
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/index');
            $this->load->view('admin/_partials/footer');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Login','refresh');
    }
}
  /* End of file Login.php */

?>
