<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Askly";
        $this->load->view('home/index', $data);
    }
}