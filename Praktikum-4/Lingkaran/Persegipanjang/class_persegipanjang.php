<?php
class persegipanjang
{
    public $lebar;
    public $panjang;

    public function __construct($lebar, $panjang)
    {
        $this->lebar = $lebar;
        $this->panjang = $panjang;
    }
    public function luas()
    {
        return $this->panjang * $this->lebar;
    }
    public function keliling()
    {
        return 2 * ($this->panjang * $this->lebar);
    }
}


?>