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
    public function edit(){
        $data["title"] = "Askly";
        $data["user"] = $this->User->getUser($_SESSION['idUser']);
        $data["avatar"] = $this->User->getAvatar($_SESSION['idUser']);
        $this->load->view('template/header-logged',$data);
        $this->load->view('profile/editProfile',$data);
    }
    public function saveEdit(){
        $data = array(
            'gender' => $this->input->post('gender'),
            'nama' => $this->input->post('nama'),
            'tingkat' => $this->input->post('tingkat'),
        );
        $this->User->updateUser($_SESSION['idUser'],$data);
        redirect(base_url('users'));
    }
    public function delete(){
        $this->User->deleteUser($_SESSION['idUser']);
        $this->logout();
    }
}