<?php
        //Numeric array
    $color = array("Red", "Black", "Pink");
    var_dump($color);
    echo "<h3>Display Result Numeric array</h3>";
        foreach($color as $col){
            echo $col. "<br>";
        }
        echo "<br>";
        //Associated array
        $color_codes = array(
            "Red" => "#ff0000",
            "Black" => "#00ff00",
            "Pink" => "#0000ff"
        );
        var_dump($color_codes);
        echo "<h2>Display Result Associated array</h2>";
        foreach($color_codes as $Key => $col){
            echo $Key ." = ". $col. "<br>";
        }


?>