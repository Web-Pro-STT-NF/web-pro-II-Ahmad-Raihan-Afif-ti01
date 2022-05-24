<?php
 include_once "class_persegipanjang.php";

$persegipanjang = new persegipanjang(34, 20);

echo "Luas dari persegi panjang adalah...";
echo "<br> Luas Persegipanjang adalah : " . $persegipanjang->luas();
echo "<br> keliling Persegipanjang adalah : " . $persegipanjang->keliling();
