<?php

class MyStockPart extends CI_Controller{

    public function __contruct(){
        parent::__contruct();
    }

    public function index()
    {
        $this->load->view('dasboard');
    }

    public function login()
    {
        if($this->input->post){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == 'admin' && $password == 'admin')
            {
                $_SESSION['username'] = 'admin';
                redirect('dasboard');
            }else{
                $this->session->set_flashdata('message', '<div class="alert
                alert-warning>Username/password tidak valid</div>');
                redirect('login');
            }
        }

        $this->load->view('login');

    }

    public function logout()
    {

    }

}

?>