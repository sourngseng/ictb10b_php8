<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Echo with HTML5 Tags</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $name="channy";
        $gender="FeMale";
        $avatar="images/img_avatar4.png";

        echo $name;
        echo "<p>Hi, $name !</p>";
        echo "<p>Gender : $gender</p>";

        echo "<img src='$avatar'>";
    ?>
</body>
</html> 