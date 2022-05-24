<?php

class Persia extends Kucing{
    // atribut
    public $nama;
    public $warna;
    public $energi;

    // constructor
    public function __construct($nama, $warna, $energi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->energi = $energi;
    }

    // method
    public function persiaMakan(){
        $this->energi += 10;
        return "{$this->nama} sedang makan dan energi bertambah 10";
    }

    public function persiaTidur(){
        $this->energi -= 5;
        return "{$this->name} sedang tidur dan energi berkurang 5";
    }
}