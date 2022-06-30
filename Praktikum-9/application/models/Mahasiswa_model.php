<?php

class Mahasiswa_model extends CI_Model
{

    private $table = "mahasiswa";

    public function getAll()
    //select * form mahasiswa;
    {
        $result = $this->db->get('mahasiswa')->result();
        return $result;
    }

    public function findByid($id)
    //select * form mahasiswa where nim=$id;
    {
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data)
    {
        $sql = "INSERT INTO mahasiswa 
        (nim,nama,gender,tmp_lahir,tgl_lahir,prodi_kode,ipk)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE mahasiswa SET nim=?,nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,
        prodi_kode=?,ipk=? WHERE nim=?";
        $this->db->query($sql, $data);
    }
    public function delete($id)
    {
        $sql = "DELETE from mahasiswa WHERE nim=?";
        $this->db->query($sql, array($id));
    }
    public function upload_foto($array)
    {
        $sql = "UPDATE mahasiswa SET foto=? WHERE nim=?";
        $this->db->query($sql,$array);
    }
    // public function predikat()
    // {
    //     $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
    //     return $predikat;
    // }
}
