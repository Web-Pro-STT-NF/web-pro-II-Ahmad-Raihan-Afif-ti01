<?php
include_once "kucing.php";

//membuat objek / instance objek kucing
$haci = new Kucing("Haci", 1, "Hitam");
$bocil = new Kucing("bocil", 2, "Abu-abu");

$haci->nama = "Haci";
echo $haci->nama, "<br>";

echo $haci->makan(), "<br>";
echo $haci->tidur(), "<br>";
echo $haci->bermain(), "<br>";

echo $bocil->makan(), "<br>";
echo $bocil->tidur(), "<br>";
echo $bocil->bermain();
