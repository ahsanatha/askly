<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('Register/index');
    }
    public function addUser(){
        $this->load->model('User');
        
        $ultah = $this->input->post("month")."/".$this->input->post("day")."/".$this->input->post("year");
        $umur =$this->User->getUmur($ultah);
        $tingkat = $this->User->getTingkat($umur);
        
        $data = array(
            'nama'  => $this->input->post("nick"),
            'email' => $this->input->post("username"),
            'password'  => md5($this->input->post("password")),
            'poin' => 0,
            'tingkat' => $tingkat,
            'negara' => $this->input->post("country"),
            'tanggalLahir' => $ultah,
        );
        $this->db->insert('user', $data);
        redirect(base_url());
    }

}