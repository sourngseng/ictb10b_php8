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
    $x=10;
    $y=4;
    echo "Result of $x+$y=" .($x+$y);//outputs:14
    echo "<br>";
    echo"Result of $x-$y=" .($x-$y);//outputs:6
    echo "<br>";
    echo"Result of $x * $y=" .($x*$y);//outputs:40
    echo "<br>";
    echo"Result of $x / $y=" .($x/$y);//outputs:2.5
    echo "<br>";
    echo"Result of $x % $y=" .($x%$y);//outputs:2
    echo "<br>";

    $result=2*($x+$y)/3;
    echo"<br>";
    echo("កន្សោមប្រមាណវិធី =" .$result);
?>
</body>
</html>
