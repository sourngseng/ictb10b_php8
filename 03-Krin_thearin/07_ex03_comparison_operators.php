<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprison operator</title>
</head>
<body>
   <?php
   $u=89;
   $v=63;
   $w=63;
   echo"<b>Number:$u==$w<b>";
   var_dump($u==$w);
   echo"<b>Number:$u===$v<b>";
   var_dump($u===$v);
   echo"<b>Number:$u!=$v<b>";
   var_dump($u!=$v);
   echo"<b>Number:$v!==$u<b>";
   var_dump($v!==$u);
   echo"<b>Number:$u>$w<b>";
   var_dump($u>$w);
   echo"<b>Number:$u<$v<b>";
   var_dump($u<$v);
   echo"<b>Number:$u<=$w<b>";
   var_dump($u<=$w);
   echo"<b>Number:$u>=$v<b>";
   var_dump($u>=$v);
   
   ?> 
</body>
</html>