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
        // comparing Integers
        echo 1 <=> 1;   echo "<br>";
        echo 1 <=> 2;   echo "<br>"; 
        echo 2 <=> 1;   echo "<br>";
    
        // comparing Float
        echo 1.5 <=> 1.5;   echo "<br>";
        echo 1.5 <=> 2.5;   echo "<br>";
        echo 2.5 <=> 1.5;   echo "<br>";
        
        // comparing String 
        echo "x" <=> "x";   echo "<br>";
        echo "x" <=> "y";   echo "<br>";
        echo "y" <=> "x";   echo "<br>";
        ?>
        
</body>
</html>