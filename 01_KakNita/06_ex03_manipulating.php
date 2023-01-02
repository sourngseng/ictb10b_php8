<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulating</title>
</head>
<body>
   <?php
   $my_str='if the facts do not fit the theory,change the facts.';
   echo strlen($my_str);
   echo "<br>";
   echo str_word_count($my_str);
   echo "<br>";
   echo str_replace("facts","truth",$my_str);
   echo "<br>";
   echo str_replace("facts","truth",$my_str,$count);
   echo "<br>";
   echo "the text was replace $count times.";
?>
</body>
</html>