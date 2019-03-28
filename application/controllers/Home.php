<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Askly";
        $data["kategori"] = array(
            "Semua", "SBMPTN", "Ujian Nasional", "Matematika",
            "B. Indonesia", "IPS", "Biologi", "Fisika",
            "Sejarah", "B. Inggris", "Seni", "Kimia", "Geografi",
            "TI", "Ekonomi", "B. Arab", "B. Daerah", "Penjaskes",
            "Sosiologi", "Bahasa Lain", "Wirausaha", "Akuntansi",
            "B. Jepang", "B. Mandarin", "B.Perancis"
        );
        $this->load->view('Home/index', $data);
    }
}