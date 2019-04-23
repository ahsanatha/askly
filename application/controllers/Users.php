<?php

class Users extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('User');
    }
    public function index(){
        $data["title"] = "Askly";
        $data["user"] = $this->User->getUser($_SESSION['idUser']);
        $data["umur"] = $this->User->getUmur($data['user']['tanggalLahir']);
        $data["avatar"] = $this->User->getAvatar($_SESSION['idUser']);
        $data["userr"] = $this->User->getAllUser()->result();
        $data["countAllUser"] = $this->User->getAllUser()->num_rows();
        $this->load->view('template/header-logged',$data);
        $this->load->view('profile/index',$data);
    }
    public function logout(){
        $_SESSION['idUser'] = NULL;
        redirect(base_url());
    }
}