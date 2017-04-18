<?php

class Laptop
{
    private $nama; 
    private $harga; 

    public function __construct(array $params = array())
    {
        // Digunakan untuk mengambil data array yang dilempar dari index
        if (count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    // __set digunakan untuk mengambil property yang tidak ada di dalam class
    // property yang ada di dalam class adalah $nama dan $harga
    // misal di dalam index diatur $laptop->warna = 'hitam' maka akan masuk ke dalam method __set
    public function __set($name, $value)
    {
        if (isset($this->$name)) {
            $this->$name = $value;
        }
    }

    public function __get($nama)
    {
        echo $nama;
    }

    public function setNama($string)
    {
        $this->nama = $string;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setHarga($int)
    {
        $this->harga = $int;
    }

    public function getHarga()
    {
        return $this->harga;
    }

}
