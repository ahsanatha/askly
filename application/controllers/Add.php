<?php

class Add extends CI_Controller
{
    public function index()
    {
        $this->load->view('Add/index');
    }
    public function addQuestion(){
        $pertanyaan = $this->input->post('Pertanyaan');
        $mapel = $this->input->post('mapel');
    }

}