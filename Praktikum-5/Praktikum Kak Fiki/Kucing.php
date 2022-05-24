<?php

// membuat class kucing
class Kucing
{
    // atribut
    // visibility : public, private, protected
    private $nama;
    private $umur;
    private $energi;

    // oonstructor
    public function __construct($nama, $umur, $energi)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->energi = $energi;
    }

    // method
    public function makan()
    {
        $this->energi += 5;
        return "{$this->nama} sedang makan dan energi bertambah 5";
    }

    public function tidur()
    {
        $this->energi -= 3;
        return "{$this->nama} sedang tidur dan energi berkurang 3";
    }

    public function lari()
    {
        $this->energi -= 5;
        return "{$this->nama} sedang lari dan energi berkurang 5";
    }
    // method getter : untuk mendapatkan akses nilai dari properti yg private
    public function getNama()
    {
        return $this->nama;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function getEnergi()
    {
        return $this->energi;
    }

    // method setter : untuk memberi nilai ulang pada properti private
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function setEnergi($energi)
    {
        $this->energi = $energi;
    }
}
