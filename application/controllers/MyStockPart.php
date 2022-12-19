<?php

class MyStockPart extends CI_Controller{

    public function __contruct(){
        parent::__contruct();
        $this->load->database();
        $this->load->helper('url');
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

    public function add_new_part()
    {
        
        $this->load->view('add_new_part');
    }

    public function add_old_part()
    {
        $this->load->view('add_old_part');
    }

    public function cek_persediaan()
    {
        $this->load->view('cek_persediaan');
    }

    public function part_keluar()
    {
        $this->load->view('part_keluar');
    }

    public function laporan_part_masuk()
    {
        $this->load->view('laporan_part_masuk');
    }

    public function laporan_part_keluar()
    {
        $this->load->view('laporan_part_keluar');
    }
}

?>