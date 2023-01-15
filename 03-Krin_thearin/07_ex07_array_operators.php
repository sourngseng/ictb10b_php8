<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array operator</title>
</head>
<body>
    <?php
    $a=array("x"=>"yellow", "y"=>"green","z"=>"pink");
    $b=array("u"=>"brown", "v"=>"black","i"=>"blue");
    $c=$a + $b;
    var_dump($c);
    var_dump($a == $b);
    var_dump($a===$b);
    var_dump($a !=$b);
    var_dump($a<>$b);
    var_dump($a !== $b);
    
    
    ?>
</body>
</html>