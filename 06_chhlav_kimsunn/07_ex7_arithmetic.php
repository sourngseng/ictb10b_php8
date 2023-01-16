<?php
$x = array ("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array ("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y;
var_dump ($z);
var_dump ($x == $y);
var_dump ($x === $y);
var_dump ($x != $y);
var_dump ($x <> $y);
var_dump ($x !== $y);
?>