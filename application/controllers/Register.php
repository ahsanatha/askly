<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('Register/index');
    }
    public function addUser(){
        $ultah = $this->input->post("month")."/".$this->input->post("day")."/".$this->input->post("year");
        //explode the date to get month, day and year
        echo $ultah;
        $birthDate = explode("/", $ultah);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
          ? ((date("Y") - $birthDate[2]) - 1)
          : (date("Y") - $birthDate[2]));
        $tingkat = "";
        if ($age > 15){
            $tingkat = "SMA";
        }else if ($age > 12){
            $tingkat = "SMP";
        }else if ($age > 6){
            $tingkat = "SD";
        }

        $data = array(
            'nama'  => $this->input->post("nick"),
            'email' => $this->input->post("username"),
            'password'  => md5($this->input->post("password")),
            'poin' => 0,
            'tingkat' => $tingkat,
            'negara' => $this->input->post("country"),
            'tanggalLahir' => $ultah
        );
        $this->db->insert('user', $data);
        redirect(base_url());
    }

}