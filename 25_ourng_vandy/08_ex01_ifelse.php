<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>
<body>
<h4>ការប្រើប្រាស់​ <span>if </span>Statement</h4>
    <?php
    
    echo "<hr>";
    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";

    if(13>$checkHours&&$checkHours>1){
        echo "<h5>នេះគឺចន្លោះម៉ោង1:00am-12:00am</h5>"; 
    }
    else{
        echo "<h5>នេះគឺចន្លោះម៉ោង1:00pm-12:00pm</h5>"; 
    }


    ?>


</body>
</html>