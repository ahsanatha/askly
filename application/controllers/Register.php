<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('Register/index');
        $email = $this->input->post('username');
        $nick = $this->input->post('nick');
        
    }
}