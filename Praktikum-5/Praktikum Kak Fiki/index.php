<?php
include_once "Kucing.php";
include_once "Persia.php";

// membuat instance class kucing
$kucing1 = new Kucing("garfield", 3, 40);

// panggil attribut dari class kucing
echo "Nama : " . $kucing1->getNama() . "<br>";
echo "umur : " . $kucing1->getUmur() . " tahun <br>";
$kucing1->setEnergi(100);
echo "energi : " . $kucing1->getEnergi() . "<br>";

// set nilai ulang energi


// panggil method dari class kucing
echo $kucing1->makan() . "<br>";
echo $kucing1->tidur() .  "<br>";
echo $kucing1->lari() . "<br>";

echo "Energi sekarang : " . $kucing1->getEnergi() . "<br>";

// membuat instance dari class persia
$persia1 = new Persia("Bolang", "Orange", 140);

echo "Nama : " .  $persia1->nama . "<br>";
echo "Warna : " .  $persia1->warna . "<br>";
echo "Energi : " .  $persia1->energi . "<br>";

echo $persia1->makan();
