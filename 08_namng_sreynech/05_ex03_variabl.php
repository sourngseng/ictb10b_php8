<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Echo with HTML5 Tags</title>
    <style>
        h1{
            color:blue;
        }
    </style>
</head>
<body>
    <?php
        $name="<h1>Namng Sreynch!</h1>";
        $gender="<h1>Male</h1>";
        $avatar="images/img_avatar5.png";

        echo $name;
        echo "<p>Hello, $name !</p>";
        echo "<p>Gender : $gender</p>";

        echo "<img src='$avatar'>";
    ?>
</body>
</html>