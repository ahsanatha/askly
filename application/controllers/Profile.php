<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Askly";
        $this->load->view('profile/index',$data);
        $this->load->view('template/navbar', $data);
    }

}