<?php 

// GET CURRENT TIMESTAMP
$now                = strtotime("now"); // current unix timestamp
$unix               = time(); // current unix timestamp
$unix_miliseconds   = floor(microtime(true) * 1000); // current unix timestamp with MILISECONDS
$datetime           = date("Y-m-d H:i:s", time()); // current datetime

echo "now= $now <br>";
echo "unix= $unix <br>";
echo "unix_miliseconds= $unix_miliseconds <br>";
echo "datetime= $datetime";

// CONVERTING
date_default_timezone_set('Asia/Jakarta');
$unix_to_datetime               = date("Y-m-d H:i:s", $unix);
$unix_miliseconds_to_datetime   = date('Y-m-d H:i:s', $unix_miliseconds/1000);
$datetime_to_unix               = strtotime($datetime);

echo "<br><br> KONVERSI <br>";
echo "unix_to_datetime= $unix_to_datetime <br>";
echo "unix_miliseconds= $unix_miliseconds_to_datetime <br>";
echo "datetime_to_unix= $datetime_to_unix";