<?php

class HomeL extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Askly";
        $this->load->view('home-logged/index', $data);
    }

}