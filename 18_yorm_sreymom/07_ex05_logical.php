<?php
$year = 2014;

if(($year % 400== 0)||(($year %100 !=0) && ($year % 4 ==0))){
    echo "$year is a lesap year.";
}else{
    echo "$year is notn a leap year.";
}
?>
}