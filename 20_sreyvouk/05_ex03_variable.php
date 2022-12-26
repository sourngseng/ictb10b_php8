<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using eho with HTML5 tags</title>
</head>
<body>
    <?php 
    $name="sreyVouk";
    $gender="female";
    $avatar="image/img_avatar6.png";

    echo $name;
    echo "<p>Hello, $name !</p>";
    echo "<p>Gender : $gender</p>";

    echo "<img src='$avatar'>";
    
    ?>
</body>
</html>