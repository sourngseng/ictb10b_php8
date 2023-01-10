<?php
$handle = fopen("note.txt","r");
var_dump ($handle);
echo"<br>";

$link = mysqli_connet ("locolhot" , "root" , "" );
var_dump($link);
?>