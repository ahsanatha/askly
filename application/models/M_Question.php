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
    public function getQuestion($id){
        $this->db->where('idTanya',$id);
        $this->db->join('user', 'user.idUser = tanya.idUser');
        return $this->db->get('tanya');
    }
    public function hapusQ($id){
        $this->db->where('idtanya', $id);
        $this->db->delete('tanya');
    }
    public function editQ($id,$data){    
        $this->db->where('idtanya', $id);
        $this->db->update('tanya', $data);
    }
    public function tambahAnswer($data){
        $this->db->insert('jawab', $data);
    }
    public function getAnswer(){
        $this->db->join('user', 'user.idUser = jawab.idUser');
        $this->db->join('tanya', 'jawab.idtanya = tanya.idtanya');
        return $this->db->get('jawab');
    }

}