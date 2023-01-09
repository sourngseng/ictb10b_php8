<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in PHP8</title>
</head>
<body>
    <h2>Using String in PHP8</h2>
    <?php
        $a = 'Hello world!';
        echo $a;
        echo "<br>";
        $b = "Hello world!";
        echo $b;
        echo "<br>";
        $c = 'Stay here, I\'ll be back.';
        echo $c;

        echo"<br>";
        $d="Hi,How are u?*&#903";
        echo $d;
        echo"<br>";
        $e="Where are you from?";
        echo $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($e);



    ?>

    <?php
        $my_str = 'World';
        echo "Hello, $my_str!<br>"; // Displays: Hello World!
        echo 'Hello, $my_str!<br>'; // Displays: Hello, $my_str!
        echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
        echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello World!
        echo 'I\'ll be back'; // Displays: I'll be back
    ?>
</body>
</html>