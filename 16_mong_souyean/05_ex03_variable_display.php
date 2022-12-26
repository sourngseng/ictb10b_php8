<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable_display</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $name="Sou yean";
        $gender="Male";
        $avatar="img/Person2.jpg";

        echo $name;
        echo "<p>Hello, $name !</p>";
        echo "<p>Gender : $gender</p>";

        echo "<img src='$avatar'>";
    ?>
</body>
</html>