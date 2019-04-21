<?php

class User extends CI_Controller{
    public function index(){
        $data["title"] = "Askly";
        $this->load->view('profile/index',$data);
    }
}