<?php

    echo "*Array Operators :";
    echo "<br>"; 
    $x = array("a" => "Red", "b" => "Green", "c" => "Blue" );
    $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
    $z = $x + $y;
    var_dump($z);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
    echo "<br>";

    echo "*Spaceship Operators :";
    echo "<br>";
    echo "Compairing Integers :";
    echo "<br>";
    echo 1 <=> 1;
    echo "<br>";
    echo 1 <=> 2;
    echo "<br>";
    echo 2 <=> 1;
    echo "<br>";

    echo "Compairing Float :";
    echo "<br>";
    echo 1.5 <=> 1.5;
    echo "<br>";
    echo 1.5 <=> 2.5;
    echo "<br>";
    echo 2.5 <=> 1.5;
     
    echo "<br>";
    echo "C0mpairing String :";
    echo "<br>";

    echo "X" <=> "X";
    echo "<br>";
    echo "x" <=> "y";
    echo "<br>";
    echo "y" <=> "x";

?>