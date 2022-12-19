<?php

class Auth_model extends CI_Model
{

    public function is_login()
    {
        $is_login = $this->session->userdata('auth');
        if(!empty($is_login))
        {
            return true;
        }else{
            return false;
        }
    }

}