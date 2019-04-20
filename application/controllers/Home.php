<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('User');
        $data["title"] = "Askly";
        $data["kategori"] = array(
            "Semua", "SBMPTN", "Ujian Nasional", "Matematika",
            "B. Indonesia", "IPS", "Biologi", "Fisika",
            "Sejarah", "B. Inggris", "Seni", "Kimia", "Geografi",
            "TI", "Ekonomi", "B. Arab", "B. Daerah", "Penjaskes",
            "Sosiologi", "Bahasa Lain", "Wirausaha", "Akuntansi",
            "B. Jepang", "B. Mandarin", "B.Perancis"
        );
        if (isset($_SESSION['idUser'])){
            $this->load->view('Home-logged/index',$data);
        }else{
            $this->load->view('Home/index', $data);
        }
        
    }


}