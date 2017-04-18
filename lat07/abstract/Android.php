<?php

require_once 'Gadget.php';

class Android extends Gadget
{
	public function mahalMurah()
	{
        echo 'Sangat Murah ... ';
	}

	// karena method beliBarang() adalah abstract, maka kita harus membuat method beliBarang()
	// dan jika tidak ada method beliBarang(), akan terjadi error
    public function beliBarang()
    {
        echo 'Barang dibeli ... ';
    }
}