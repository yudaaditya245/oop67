<?php

require 'app/Laptop.php';
require 'app/Validator.php';

$rules = array('nama' => 'required|nama', 'harga' => 'required|max:5000');

$data = array('nama' => 'ASUS', 'harga' => '2000');

$validator = new Validator();

if ($validator->validate($data, $rules) == true) {

    // Melempar langsung ke magic method __construct()
    $laptop = new Laptop($data);

    $laptop->warna = 'hitam'; // karena property warna tidak diatur didalam class, akan masuk ke method __set
    echo $laptop->warna; // menjalankan method __get;
    
    echo '<pre>';
    print_r($laptop);
} else {
    
    echo '<pre>';
    var_dump($validator->getErrors());
}
