<?php

require_once 'Gadget.php';

class Laptop extends Gadget
{
	// method mahalMurah() dan beliBarang() harus ada di class Laptop karena merupakan abstract method
    // jadi jika dihapus, akan ada error

	public function mahalMurah()
	{
	    echo 'Sangat Mahal ... ';
	}

	public function beliBarang()
	{
	    echo 'Barang dibeli ... ';
	}

    // method laptopKeren() tidak harus ada di class Laptop karena bukan abstract
    // jika dihapus tidak menimbulkan error

	public function laptopKeren()
	{
	    echo 'Laptop keren sekali ... ';
	}
}