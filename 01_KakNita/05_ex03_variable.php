<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using echo with HTML5 Tags </title>
    <style>
        p{
            color: blue;
        }
    </style>
</head>
<body>
    <?php
    $name="san sophea";
    $gender="Female";
    $avatar="image/img_avatar2.jpg";

    echo $name;
    echo "<p>Hello, $name !</p>";
    echo "<p>Gender :$gender</p>";
    echo "<img src='$avatar'>";
    ?>
</body>
</html>