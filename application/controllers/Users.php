<?php

class Users extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('User');
    }
    public function index(){
        $data["title"] = "Askly";
        $data["user"] = $this->User->getUser($_SESSION['idUser']);
        $this->load->view('template/header-logged',$data);
        $this->load->view('profile/index',$data);
    }
    public function logout(){
        $_SESSION['idUser'] = NULL;
        redirect(base_url());
    }
}