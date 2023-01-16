<?php

$x = "Hello";
$y = "World!";
echo $x . $y;//Outputs: Hello world!
echo"<br>";

$x .= $y;
echo $x;
?>




<?php

//Array
$x = array("a"=>"Red","b"=> "Green","c" =>"Blue");
$y =array("u"=>"Yellow","v"=>"Orange","w"=>"Pink");
$z = $x + $y;   //Union of and $y
var_dump ($z);
var_dump ($x==$y);   //outputs: boolean false
var_dump ($x===$y);  //outputs: boolean false
var_dump ($x!=$y);   //outputs: boolean true
var_dump ($x<>$y);   //outputs: boolean true
var_dump ($x!==$y);  //outputs: boolean true
?>