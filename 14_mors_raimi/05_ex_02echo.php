<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using echo with html5 tags</title>
</head>
<body>
    <?php
    echo "<h1>This is sample heading.</h1>";
    echo "<h3 style ='color:red;'>This is heading with style.</h3>";

    $name ="Raimi";
    $gender ="Male";
    $avatar ="images/img_avatar6.png";
 
    echo $name;
    echo "<p>Hello, $name !</p>";
    echo "<p>Gender: $gender</p>";
    echo "<img src='$avatar'>";
 
    ?>
</body>
</html>

