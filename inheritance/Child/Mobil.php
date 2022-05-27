<?php

require_once "Parent/Kendaraan.php";

class Mobil extends Kendaraan {
    
    function __construct() 
    {
        $this->jenis_kendaraan = "mobil";
    }

    function get_detail() 
    {
        return $this->detail_kendaraan;
    }

    function set_detail(array $detail)
    {
        $this->detail_kendaraan = $detail;
    }
}