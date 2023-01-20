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
      @date("D");
    if (date(D)=="Mon"){
        echo "<h2>Today is Monday</h2>";
    }else if(date("D")=="Tue"){
        echo "<h2>Today is Tuesday</h2>";
    }else if(date("D")=="Wed"){
        echo "<h2>Today is wednesday</h2>";
    }else if(date("D"=="Thu")){
        echo "<h2>Today is Thursday</h2>";
    }else if(date("D"=="Fri")){
        echo "<h2>Today is friday</h2>";
    }else if(date("D"=="Sat")){
        echo "<h2>Today is saturday</h2>";
    }else if(date("D")=="Sun"){
        echo "<h2>Today is Sunday</h2>";
    }else{
        echo "i like to kill your my friends";
    }
     ?>
</body>
</html>