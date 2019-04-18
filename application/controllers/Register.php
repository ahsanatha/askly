<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('Register/index');
    }
    public function addUser(){
        $email = $this->input->post("username");
        
        echo 'keluar nih';
        // $this->load->model('User');
    }

}