<?php

require 'Android.php';
require 'Laptop.php';

$Laptop = new Laptop();
$Laptop->beliBarang();
$Laptop->mahalMurah();
$Laptop->laptopKeren();
$Laptop->merk = 'ROG';
$Laptop->harga = '50 juta';
echo $Laptop->ambilBarang();

echo '<br/>';

$Android = new Android();
$Android->beliBarang();
$Android->mahalMurah();
$Android->merk = 'Infinix';
$Android->harga = '4 juta';
echo $Android->ambilBarang();