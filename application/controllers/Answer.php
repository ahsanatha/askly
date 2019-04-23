<?php

class Answer extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('User');
        $this->load->model('M_Question');
    }
    public function index()
    {
        $data['user'] = $this->User->getUser($_SESSION['idUser']);
        $data['title'] = 'Askly';
        $data['avatar'] = $this->User->getAvatar($_SESSION['idUser']);
        $data['question'] = $this->M_Question->getQuestion($_GET['idtanya'])->row_array();
        $data['punyaSendiri'] = ($_SESSION['idUser'] == $data['question']['idUser']);
        //print_r(($_SESSION['idUser'] == $data['question']['idUser']));
        $this->load->view('template/header-logged',$data);
        $this->load->view('Answer/index');
    }
    public function addAnswer(){
        
    }

}