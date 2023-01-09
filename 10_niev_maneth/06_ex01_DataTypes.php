<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$my_str= 'I am student!';

// Outputs: 28
echo "I am student!";

echo strlen($my_str);
?>
<br>
<?php

$my_str = 'The quick brown fox jumps over the lazy dog.';

 //Outputs: 9
echo "The quick brown fox jumps over the lazy dog.";
echo str_word_count($my_str);

?>
</body>
</html>