<?php

class User extends CI_Model{
    public function getUser($id){
        $this->db->where('idUser',$id);
        return $this->db->get('user')->row_array();
    }
}