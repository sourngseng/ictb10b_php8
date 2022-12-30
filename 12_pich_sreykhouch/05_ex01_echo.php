<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Echo With HTML5 Tags</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    each "Hello, Nana!";
    each "<h1>Hello Heaging 1!</h1>";  
    ?>
    
</body>
</html>