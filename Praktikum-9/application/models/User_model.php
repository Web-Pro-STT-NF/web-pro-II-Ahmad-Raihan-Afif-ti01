<?php

class User_model extends CI_Model
{

    private $table = "user";

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
    public function login($uname, $pass)
    {
        $sql = "SELECT * FROM user WHERE username=?
        and password=md5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    // public function save($data)
    // {
    //     $sql = "INSERT INTO user 
    //     (id,username,password,email,role,created_at,last_login)
    //     VALUES (?,?,md5(?),?,?,?,?)";
    //     $this->db->query($sql, $data);
    // }
}
