<?php

function sum(...$numbers) {
    // var_dump($numbers);
    echo "<br>".array_sum($numbers);
}
sum(1,3,5);

// OR

function average() {
    $numbers_count = func_num_args();
    $numbers = func_get_args();

    if($numbers_count > 0) {
        $result = 0;
        foreach($numbers as $n) {
            $result = $result+$n;
        }
        echo "<br>".$result/$numbers_count;
    }
    else {
        echo "<br> Not parameter";
    }
}
average(6,4,3,6,77); 