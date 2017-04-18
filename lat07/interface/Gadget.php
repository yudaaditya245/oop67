<?php

interface Gadget
{
    public function kualitasKamera();
    public function spesifikasiGadget();

    // pada interface tidak diperbolehkan adanya normal method seperti di bawah ini
    //
    // public function barang()
    // {
    //     return 'Barang ... ';
    // }
}