<?php

trait UPPER {
    function doA() {
        echo "<br> A";
    }
    
    function doB() {
        echo "<br> B";
    }
}

trait LOWER {
    function doA() {
        echo "<br> a";
    }
    
    function doB() {
        echo "<br> b";
    }
}

class Conflict {
    use LOWER, UPPER {
        UPPER::doA insteadOf LOWER; // doA pakai UPPER daripada LOWER
        LOWER::doB insteadOf UPPER; // doB pakai LOWER daripada UPPER
    }
}