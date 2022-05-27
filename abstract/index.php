<!-- 
    - tidak dapat diinstansiasi
    - mendefinisikan interface kelas lain yg menjadi turunannya
    - sebagai kerangka dasar untuk kelas turunannya
    - memiliki min 1 method abstract
-->

<?php

abstract class Developer {

    public string   $developer_name, 
                    $developer_type;

    function sayHello($developer_name, $developer_type) {} // tidak boleh ada block (isi function)
}

class Backend extends Developer {
    function sayHello ($name, $tipe) {
        echo "Hello, $name ($tipe)";
    }
}

$dev = new Backend();
$dev->sayHello("Andri", "Backend Developer");