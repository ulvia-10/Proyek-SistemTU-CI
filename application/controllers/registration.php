<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Login_model');
        
    }

    public function index()
    {
        $data ['title']='Registration | Page';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/register');
    }

    public function register(){
        $this->form_validation->set_rules('username', 'Username', 'required');


        if($this->form_validation->run()==false){ 
            $data ['title']='Registration | SITU Page ';
            $this->load->view('admin/_partials/head', $data);
            $this->load->view("admin/login/register");

        } else{
            $this->Login_model->register();
            redirect('admin/login/index', 'refresh');
        }


    }

}

/* End of file register.php */
