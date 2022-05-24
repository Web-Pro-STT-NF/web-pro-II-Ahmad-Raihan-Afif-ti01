<?php
class Pasien
{
    protected $kodePasien;
    protected $namaPasien;
    protected $gender;
    protected $tempatLahir;
    protected $tanggalLahir;
    protected $email;

    public function __construct($kode, $nama, $gender, $tmp, $tgl, $email)
    {
        $this->kodePasien = $kode;
        $this->namaPasien = $nama;
        $this->gender = $gender;
        $this->tempatLahir = $tmp;
        $this->tanggalLahir = $tgl;
        $this->email = $email;
    }

    public function getProperties($propertie)
    {
        return $this->{$propertie};
    }
}
