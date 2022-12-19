<?php

class MyStockPart extends CI_Controller{

    public function __contruct(){
        parent::__contruct();
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('dasboard');
    }

    public function login()
    {

        $this->load->view('login');

    }

    public function logout()
    {

    }

}

?>