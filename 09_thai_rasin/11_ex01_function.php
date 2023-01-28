<?php
// function with default parsmenter 
function defva ($str,$num=12)
{
    echo "$str is $num years old \n";
}
//calling the function 
defva ("Ram",15);
echo"<br>";
//In this call the default value 12
defva("Adam");
?>