<?php

class Lingkaran
{ // buka class
    private $jari;
    const PHI = 5.2;
    function __construct($r)
    {
        $this->jari = $r;
    }
    function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
} // tutup class
?>
