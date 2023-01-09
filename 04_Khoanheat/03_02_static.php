<?php
    function myTest() {
    static $x = 3;
    echo $x;
    $x++;
    }

    myTest();
    myTest();
    myTest();
?>