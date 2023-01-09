<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
        $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
        $z = $x + $y; //union of $x and $y
        var_dump($z);           echo "<br>";
        var_dump($x == $y);     echo "<br>";
        var_dump($x === $y);    echo "<br>";
        var_dump($x != $y);     echo "<br>";
        var_dump($x <> $y);     echo "<br>";
        var_dump($x !== $y);    echo "<br>";
       
    ?>
</body>
</html>