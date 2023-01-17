<?php
$a=3;
$b=4;
$c=10;
$d=20;
echo "Result :".(($a<=$b)?(($a<=$d)?$a:$d):(($a<=$d)?$a:$d));
?>

<?php
$a=3;
$b=4;
$c=10;
$d=20;
echo "Result :".(($a<=$b)?(($a<=$d)?$a:$d):(($a<=$d)?$a:$d));
echo "<br>";
?>

<?php
$x =50;
$y =100;
$z =10;
 echo "Result is :";
   

    if ($x <= $y) { 
        if ($x <= $z){
            echo $x;
        }else{
            echo $z;}
    }
        else{ 
            if ($y <= $z) { 
            echo $y;
        }else {
            echo $z;}
        }


?>