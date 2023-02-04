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
            color: red;
        }
    </stylle>
</head>
<body>
    <h4>ការប្រើប្រាស់​ <span>if </span>statement</h4>
    <?php
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHours=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHour</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";
    if($checkHours>8){
        echo "<h5>ក្រោកពីគេងនៅ</h5>";
        echo "<h5>អរុណសួស្ដី តោះទៅហាត់ប្រាណ!</h5>";
    }
    echo "<hr>";
    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHours=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHour</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";
    if($checkHours>8){
        echo "<h5>ក្រោកពីគេងនៅ</h5>";
        echo "<h5>អរុណសួស្ដី តោះទៅហាត់ប្រាណ!</h5>";
    }
    ?>
</body>
</html>