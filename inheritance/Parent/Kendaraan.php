<?php

class Kendaraan {
    protected $list; //hanya bisa diakses class sendiri dan turunannya
    // private $list; // hanya bisa diakses class sendiri
    var $jenis_kendaraan;

    function list() 
    {
        return ["motor", "mobil", "sepeda"];
    }
}