<?php

abstract class Gadget
{
    public $merk;
    public $harga;

    public function ambilBarang()
    {
        return "Gadget $this->merk dibeli dengan harga $this->harga";
    }

    // abstract method harus ada di anak Class dan jika tidak ada, maka akan terjadi error
    abstract public function beliBarang();
    abstract public function mahalMurah();
}