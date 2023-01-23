<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using if statement</title>
    <style>
        body{
            font-family: 'Courier New', "Hanuman", monospace;
        }
        h4{
            font-size: x-large;
        }
        h5{
            font-size: medium;
        }
        span{
            color: black;
        }
    </style>
</head>
<body>
     <h4>Using​ <span>if </span>Statement</h4>
    <?php
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";
    if($checkHours>8){
        echo "<h5>ម៉ោងនៅពេលព្រឺក</h5>";
    
    } 
    echo "<hr>";
    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";

    if($checkHours>12){
        echo "<h5>ម៉ោងនៅពេលរសៀល</h5>";

    }

    ?>
</body>
</html>