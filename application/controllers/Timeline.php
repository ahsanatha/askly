<?php

class timeline extends CI_Controller
{
    public function index()
    {
        $this->load->model('User');
        $this->load->model('M_Question');
        $data['user'] = $this->User->getUser($_SESSION['idUser']);
        $data['title'] = 'Askly';
        $data['avatar'] = $this->User->getAvatar($_SESSION['idUser']);
        $questions = $this->M_Question->getAllquestion();
        $data['questions'] = $questions->result();
       // print_r($data['questions']);
        $this->load->view('template/header-logged',$data);
        $this->load->view('Timeline/index',$data);
    }

}