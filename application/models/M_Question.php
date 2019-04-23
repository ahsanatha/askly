<?php

class M_Question extends CI_Model{

    public function addQuestion($data){
        $this->db->insert('tanya', $data);
    }
    public function getAllQuestion(){
        $this->db->join('user', 'user.idUser = tanya.idUser');
        return $this->db->get('tanya');
    }
    public function addPoinUser($id,$plus){
        $this->db->select('poin');
        $this->db->where('idUser',$id);
        $poin = $this->db->get('user')->row_array()['poin'];
        $this->db->where('idUser', $id);
        $data = array(
            'poin' => ($poin+$plus),
        );
        $this->db->update('user', $data);
    }

}