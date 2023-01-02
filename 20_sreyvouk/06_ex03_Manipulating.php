<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using Manilaputing</title>
</head>
<body>
    <?php
    $my_str ='welcome  to Tutorial Republic';
    echo strlen ($my_str);
    echo "<br>";
    $my_str='The quick brown fox jumps over the lazy dog.';
    echo str_word_count($my_str);
    echo "<br>";
    echo str_replace("fact","truth",$my_str);
    echo "<br>";
    echo str_replace("fact","truth",$my_str, $count);
    echo "<br>";
    echo "the text was replace $count times.";
    echo "<br>";

    ?>
</body>
</html>