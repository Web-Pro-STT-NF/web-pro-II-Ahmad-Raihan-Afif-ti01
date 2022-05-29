<?php

class Dosen_model extends CI_Model
{
    // public $id;
    // public $nama;
    // public $gender;
    // public $tmp_lahir;
    // public $tgl_lahir;
    // public $nidn;
    // public $pendidikan;

    private $table = "dosen";

    public function getAll()
    {
        $result = $this->db->get('dosen')->result();
        return $result;
    }
    
    public function findByid($id)
    {
        $this->db->where('kode', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
