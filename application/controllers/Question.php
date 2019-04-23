<?php

class Question extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('User');
        $this->load->model('M_Question');
    }
    public function index(){
        $data["title"] = "Askly";
        $data["user"] = $this->User->getUser($_SESSION['idUser']);
        $data["umur"] = $this->User->getUmur($data['user']['tanggalLahir']);
        $data["avatar"] = $this->User->getAvatar($_SESSION['idUser']);
        $this->load->view('template/header-logged',$data);
        $this->load->view('question/index',$data);
    }
    public function add(){
        $data = array(
            'idUser' => $_SESSION['idUser'],
            'tanggal' => date("Y/m/d"),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'terjawab' => 0,
            'mapel' =>$this->input->post('subject_id'),
        );
        $this->M_Question->addQuestion($data);
        redirect(base_url());
    }
    
}