<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('Login/index');
    }
    public function doLogin(){
        $this->db->where('nama', $this->input->post('username'));
        $this->db->or_where('email', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        $res = $this->db->get('user');
        if($res->num_rows() > 0){
            echo "login success";
        }else{
            echo "login failed";
        }
    }
}