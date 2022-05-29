<?php

class Mahasiswa_model extends CI_Model
{

    // public $id;
    // public $nama;
    // public $nim;
    // public $gender;
    // public $tmp_lahir;
    // public $tgl_lahir;
    // public $ipk;
    private $table = "mahasiswa";

    public function getAll()
    {
        $result = $this->db->get('mahasiswa')->result();
        return $result;
    }
    
    public function findByid($id)
    {
        $this->db->where('kode', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }


    // public function predikat()
    // {
    //     $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
    //     return $predikat;
    // }
}
