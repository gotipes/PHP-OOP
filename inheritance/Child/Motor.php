<?php

require_once "Parent/Kendaraan.php";

class Motor extends Kendaraan {
    
    function __construct() 
    {
        $this->jenis_kendaraan = "motor";
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