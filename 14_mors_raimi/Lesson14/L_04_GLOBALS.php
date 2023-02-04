<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello global in php</title>
</head>
<body>
    <?php
        $x =7;
        $y =9;
        function additon(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        additon();
        echo $z;
    ?>
</body>
</html>