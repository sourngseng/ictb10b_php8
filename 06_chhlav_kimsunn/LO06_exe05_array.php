<?php
    // Numberic array
    $colors = array("Red" , "Green" , "Blue");
    var_dump($colors);
    echo "<h3>Display Result Numberic array</h3>";
        foreach($colors as $col){
            echo $col. "<br>";
        }
    echo "<br>";
    // Associated Array
    $color_codes = array(
        "Red" => "#ff0000",
        "Green" => "#00ff00",
        "Blue" => "#0000ff",
    );
    var_dump($color_codes);

    echo  "<h3>Display Result Associated array</h3>";
    foreach($color_codes as $key => $col){
        echo $key . " = ". $col. "<br>";
    }
?>