<?php

class User extends CI_Model{
    public function getUser($id){
        $this->db->where('idUser',$id);
        return $this->db->get('user')->row_array();
    }
    public function getUmur($tglLahir){
        $birthDate = explode("/", $tglLahir);
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
        return $age;
    }
    public function getTingkat($age){
        $tingkat = "";
        if ($age > 15){
            $tingkat = "SMA";
        }else if ($age > 12){
            $tingkat = "SMP";
        }else if ($age > 6){
            $tingkat = "SD";
        }
        return $tingkat;
    }
    public function getAvatar($id){
        $this->db->select('avatar');
        $this->db->where('idUser',$id);
        $query = $this->db->get('user')->row_array()['avatar'];

        if($query != NULL){
            return $query;
        }else{
            return 'user.svg';
        };

    }
    public function getAllUser(){
        $query = $this->db->get('user');
        return $query;
    }

    public function updateUser($id,$data){    
        $this->db->where('idUser', $id);
        $this->db->update('user', $data);
    }
    public function deleteUser($id){
        $this->db->where('idUser', $id);
        $this->db->delete('user');
    }
    
}