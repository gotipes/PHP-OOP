<?php

require "Child/Mobil.php";
require "Child/Motor.php";

$kendaraan = new Mobil();
// var_dump($kendaraan->list());
// var_dump($kendaraan->jenis_kendaraan);

$kendaraan->set_detail([
    'merk' => "Avanza Veloz",
    'tahun' => '2011',
    'jenis_kendaraan' => $kendaraan->jenis_kendaraan
]);
print_r($kendaraan->get_detail());
var_dump($kendaraan->list());

echo "<br>";

$kendaraan2 = new Motor();
$kendaraan2->set_detail([
    'merk' => "Yamaha Mio",
    'tahun' => '2019',
    'jenis_kendaraan' => $kendaraan2->jenis_kendaraan
]);

print_r($kendaraan2->get_detail());