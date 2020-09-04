<?php
//OPERATOR MMT

$a = 10;
$b = 5;

$c = $a + $b;

echo $c . '<br>';

$c = $a - $b;

echo $c . '<br>';

$c = $a * $b;

echo $c . '<br>';

$c = $a / $b;

echo floor($c) . '<br>';

$c = $a % $b;

echo $c . '<br>';

//OPERATOR LOGIC

$c = $a < $b;
echo $c . '<br>';

$c = $a > $b;
echo $c . '<br>';

$c = $a == $b;
echo $c . '<br>';

$c = $a != $b;
echo $c . "<br>";

//INCREMENT OR DIGREMENT
$a++;
echo $a . '<br>';

//OPERATOR STRING
$kata = 'Madu';
$kota = 'raaaa';
$hasil = $kata . $kota;
echo $hasil .= ' Kota Sate Daging ' . '<br>';
