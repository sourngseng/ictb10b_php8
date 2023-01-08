<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:30px;text-align:center;">
    


<?php

    $colors = array("yellow", "white", "black","pink");

    echo "<h3>Result array</h3>";
        foreach($colors as $col){
            echo $col. "<br>";
        }
    echo "<br>";
    $color= array(
        "white" => "#255",
        "black" => "#00000",
        "yellow" => "#232sdf"
    );

    echo "<h3> Result Associated array</h3>";
    foreach($color as $key => $col){
        echo $key ." => ". $col. "<br>";
    }
    $background=array("dark","info","marning");
    var_dump($background);
    echo "<h2>Result background Arrray</h2>";
    foreach ($background as $col){
        echo $col. "<br>";
    }
?>

</body>
</html>