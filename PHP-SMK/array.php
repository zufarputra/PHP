<?php


// array dimensi

// $nama = array("joni", "tejo", "budi", "siti", 100, 2.5);

// var_dump($nama);

// echo "<br>";
// echo $nama[5];
// echo "<br>";

// for ($i = 0; $i < 6; $i++) {
//     echo $nama[$i] . "<br>";
// }
// foreach ($nama as $key) {
//     echo $key . "<br>";
// }

// <!-- array asosiasi -->

// $nama = array(
//     "joni" => "Surabaya",
//     "tejo" => "Malang",
//     "budi" => "Manado",
//     "siti" => "Sidoarjo"
// );

$nama["joni"] = "Surabaya";
$nama["tejo"] = "Malang";
$nama["budi"] = "Manado";
$nama["siti"] = "Sidoarjo";
$nama["Cris"] = "Lamongan";

var_dump($nama);

echo "<br>";

//echo $nama["budi"];

foreach ($nama as $key => $value) {
    echo $key . " => " . $value;
    echo "<br>";
}
