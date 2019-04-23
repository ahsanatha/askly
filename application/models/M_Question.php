<?php

class M_Question extends CI_Model{

    public function addQuestion($data){
        $this->db->insert('tanya', $data);
    }
    public function getAllQuestion(){
        return $this->db->get('tanya');
    }

}