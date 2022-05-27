<?php

// class static digunakan untuk variable atau method yg sifatnya tetap

class Greeting {
    public static $nama = "Andri";
    public static $increment = 1;

    public function hello()
    {
        return "<br> Hello ". self::$nama. " ".self::$increment++." kali";
    }
}

echo Greeting::$nama;
echo Greeting::hello();
echo Greeting::hello();