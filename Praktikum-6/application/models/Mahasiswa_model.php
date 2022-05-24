<?php

class Mahasiswa_model extends CI_Model
{
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll(){
        $result = $this->db->get('mahasiswa')->result();
        return $result;
    }
}
?>