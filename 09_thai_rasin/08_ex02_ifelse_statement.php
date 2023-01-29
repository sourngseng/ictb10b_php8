<?php
$d =date("D");
if($d =="Fri"){
    echo" Have a nice weekend!";

}else{
    echo "Have a nice day!";
    echo"<br>";
}
?>

<!-- if  elseif else statement -->
<?php
$d=date ("D");
if($d =="Fri"){
    echo"Have a nice weekend!";
   

}elseif ($d=="sun"){
    echo "Have a nice Sunday!";
}else{
    echo "Have a nice day!";
    
}

?>