<?php

class timeline extends CI_Controller
{
    public function index()
    {
        $this->load->model('User');
        $data['user'] = $this->User->getUser($_SESSION['idUser']);
        $data['title'] = 'Askly';
        $data['avatar'] = $this->User->getAvatar($_SESSION['idUser']);
        $this->load->view('template/header-logged',$data);
        $this->load->view('Timeline/index',$data);
    }
}