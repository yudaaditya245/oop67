<?php

require 'Gadget.php';
require 'HandPhone.php';

// untuk mengimplementasikan interface, menggunakan implements.
// kita dapat mengimplementasikan beberapa interface sekaligus.

class Android implements Gadget, HandPhone
{
    public function kualitasKamera()
    {
        echo 'Sangat bagus ... ';
    }

    public function spesifikasiGadget()
    {
        echo 'Sangat tinggi ... ';
    }

    public function pelindungLayar()
    {
    	echo 'Gorilla Glass Terbaru ... ';
    }
}
