<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Integer in PHP8</title>
</head>
<body>
    <?php
        $a=54.8;
        // $a = 123; // លេខគោល១០ decimal number 
        var_dump($a);
        echo "<br>";
        $b = -234; // អវិជ្ជមាន a negative number
        var_dump($b);
        echo "<br>";
        $c = 0x1A; // ចំនួនគោល១៦ hexadecimal number
        var_dump($c);
        echo "<br>";
        $d = 0123; // ចំនួនគោល៨ octal number
        var_dump($d);
    ?>
</body>
</html>