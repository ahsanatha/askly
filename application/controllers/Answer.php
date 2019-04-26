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
        $data['answers'] = $this->M_Question->getAnswer($_GET['idtanya'])->row_array();
        //print_r(($_SESSION['idUser'] == $data['question']['idUser']));
        $this->load->view('template/header-logged',$data);
        $this->load->view('Answer/index');
    }
    public function addAnswer(){
        $iduser = $_GET['iduser'];
        $idtanya = $_GET['idtanya'];
        $data =  array(
            'idtanya' => $idtanya,
            'iduser' => $iduser,
            'tanggal' => date("Y/m/d"),
            'jawaban' => $this->input->post("jawaban"),
        );
        $this->M_Question->tambahAnswer($data);
        redirect(base_url());
    }

}