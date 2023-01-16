<?php
$x =10;
echo ++$x;   //Outputs:11
echo "<br>";
echo $x;    //Outputs:11
echo "<br>";


$x =10;
echo $x++;  //Outputs:10
echo "<br>";
echo $x;    //Outputs:11
echo "<br>";


$x =10;
echo --$x;  //Outputs:9
echo "<br>";
echo $x;    //Outputs:9
echo "<br>";


$x =10;
echo $x--;  //Outputs:10
echo "<br>";
echo $x;    //Outputs:9
echo "<br>";

?>




<?php
//Logical Operators
$year =2014;
if(($year % 400 == 0)||(($year %100 !=0) &&($year % 4 == 0))){
    echo "$year is a leap year.";

}else{
    echo "$year is not a leap year.";
}

?>