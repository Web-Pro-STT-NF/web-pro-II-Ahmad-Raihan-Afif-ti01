<?php
class  NilaiMahasiswa
{
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($nim, $matkul, $nilai)
    {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function grade()
    {
        if ($this->nilai >= 85) return "A";
        elseif ($this->nilai >= 70) return 'B';
        elseif ($this->nilai >= 56) return 'C';
        elseif ($this->nilai >= 36) return 'D';
        elseif ($this->nilai >= 0) return 'E';
    }
    function hasil()
    {
        if ($this->nilai >= 56) return "LULUS";
        elseif ($this->nilai <= 55) return "Tidak Lulus";
    }
}
