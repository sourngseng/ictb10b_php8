<?php
    $colors=array("Red","Green","Blue","pink");
    var_dump($colors);
    echo "<h3>Display Result Numeric Array</h3>";
        foreach($colors as $col){
            echo $col. "<br>";

        }
        echo "<br>";
        $colors_codes=array(
            "Red"=>"#ff0000",
            "Green"=>"#00ff00",
            "Blue"=>"#0000ff",
            "pink"=>"#ffC0cb",
        );
        var_dump($colors_codes);
        echo "<h3>Display Result Associated Array</h3>";
        foreach($colors_codes as $key => $col){
            echo $key ." = ". $col. "<br>";
        }
    ?>