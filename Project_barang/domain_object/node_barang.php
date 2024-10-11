<?php

class barang{
    public $barang_code;
    public $barang_name;
    public $barang_description;
    public $barang_harga;


    function __construct($barang_code, $barang_name, $barang_description, $barang_harga)
    {
        $this->barang_code = $barang_code;
        $this->barang_name = $barang_name;
        $this->barang_description = $barang_description;
        $this->barang_harga = $barang_harga;
    }
}
?>