<?php

class Answer extends CI_Controller
{
    public function index()
    {
        
        $this->load->view('template/header-logged',$data);
        $this->load->view('Answer/index');
    }

}