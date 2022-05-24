<?php
//Class Kucing 
class Kucing
{
    //atribut
    //visibility : pubclic, privete, etc
    public $nama;
    public $umur;
    public $warna;

    //membuat constructor
    public function __construct($nama, $umur, $warna)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->warna = $warna;
    }
    //behavior/method
    public function makan()
    {
        return "{$this->nama} sedang makan";
    }
    public function tidur()
    {
        return "{$this->nama} sedang tidur";
    }
    public function bermain()
    {
        return "{$this->nama} sedang bermain";
    }
}
