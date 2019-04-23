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
        $this->M_Question->addPoinUser($_SESSION['idUser'],5);
        redirect(base_url());
    }
    public function hapus(){
        if($_SESSION['idUser']==$_GET['idUser']){
            $this->M_Question->hapusQ($_GET['idtanya']);
            redirect(base_url());
        }else{
            redirect(base_url());
        }
    }
    public function edit(){
        if($_SESSION['idUser']==$_GET['idUser']){
            $data["title"] = "Askly";
            $data["user"] = $this->User->getUser($_SESSION['idUser']);
            $data["avatar"] = $this->User->getAvatar($_SESSION['idUser']);
            $data['pertanyaan'] = $this->M_Question->getQuestion($_GET['idTanya'])->row_array();
            $this->load->view('template/header-logged',$data);
            $this->load->view('question/edit',$data);
        }else{
            redirect(base_url());
        }
    }
    public function saveEdit(){
        $data = array(
            'idUser' => $_SESSION['idUser'],
            'tanggal' => date("Y/m/d"),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'terjawab' => 0,
            'mapel' =>$this->input->post('subject_id'),
        );
        $this->M_Question->editQ($_GET['idtanya'],$data);

        redirect(base_url());
    }
    
}