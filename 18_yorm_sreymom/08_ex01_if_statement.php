<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
    <h2>ការប្រើប្រាស់<span>if</span>statement<h2>
    <?php
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";
    if($checkHours>8){
        echo "<h5>ក្រោកពីគេង អារម្មរណ៏ស្រស់ស្រាយ</h5>";
        echo "<h5>អរុណសួស្តី មនុស្សលោកទាំងឡាយ!</h5>";
    }
    echo "<hr>";
    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";

    if($checkHours>8){
        echo "<h5>ក្រោកពីគេង អារម្មរណ៏ស្រស់ស្រាយ</h5>";
        echo "<h5>អរុណសួស្តី មនុស្សលោកទាំងឡាយ!</h5>";
    }

    ?>



</body>
</html>