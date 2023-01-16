<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logical operator</title>
</head>
<body>
    <?php
       $life=2020;
       if(($life/10==0)&& ($life*2!==0)){
           echo"$life is current year.";
           echo "<br>";
       }else{
           echo"$life is old year.";
           echo "<br>";
       }
    $c=2023;
    if(($c/2==0)||($c*123==0)&&($c%4==0)){
        echo"$c is not a real year.";
        echo "<br>";
    }else{
        echo"$c is a fantastic year for get learing or working a opportunity.";
        echo "<br>";
    }
 
    
    
    ?>
</body>
</html>