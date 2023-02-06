<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
   <?php
   $a=50;
   if($a>30){
    echo"<h1>your age is greater than 30!</h1>";
    echo"<h2 style='color:red;'> this is my unreal age</h2>";
    echo"<h3 style='color:green;'> i am so younger than my classmate</h3>";
   }
   ?> 
   <hr>
   <?php 
     echo date_default_timezone_get();
     $checkHours=date('H');
     $fullHour=date('H:i:s a');
     echo "<h5>Current Hour is : $checkHours</h5>";
     echo "<h5>Current Hour is : $fullHour</h5>";
     if($checkHours>8){
         echo "<h5 style='color:orange';>រីករាយថ្ងៃសម្រាក</h5>";
         echo "<h5 style='color:red';>តើអ្នកសុខសប្បាយជាទេ?</h5>";
     }
     echo "<hr>";
     date_default_timezone_set('Asia/Phnom_Penh');
     echo date_default_timezone_get();
     $checkHours=date('H');
     $fullHour=date('H:i:s a');
     echo "<h5 style='color:blue;>Current Hour is : $checkHours</h5>";
     echo "<h5 style='color:green;>Current Hour is : $fullHour</h5>";
 
     if($checkHours>8){
         echo "<h5 style='color:orange';>សួស្តីអ្នកទាំងអស់គ្នា</h5>";
         echo "<h5 style='color:red';>តើអ្នកមានពេលទំនេរទេ?</h5>";
     }
 
   
   ?>
   
</body>
</html>