<?php

class M_Question extends CI_Model{

    public function addQuestion($data){
        $this->db->insert('tanya', $data);
    }
    public function getAllQuestion(){
        $this->db->join('user', 'user.idUser = tanya.idUser');
        return $this->db->get('tanya');
    }

}