<?php

function belajar()
{
    echo 'Saya Belajar PHP';
}

function luaspersegi($p = 2, $l = 20)
{

    $luas = $p * $l;
    echo $luas;
}

function luas($p = 3, $l = 10)
{
    $luas = $p * $l;
    return $luas;
}

function output()
{
    return 'Belajar function';
}
echo luas(10, 10) * 8;

echo "<br>";

luaspersegi() * 20;
