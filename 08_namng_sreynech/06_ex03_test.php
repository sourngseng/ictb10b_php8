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
         $my_str = 'Wellcome to Tutoriel Republic';
         echo strlen($my_str);
    ?>

    <?php 
         $my_str ='Information Technology';
         echo str_word_count($my_str);
    ?>

    <?php 
         $my_str ='Hi! I am Sreynech, How are you';
         echo str_replace("Hi!", "Hello!", $my_str);
    ?>

    <?php 
         $my_str ='Hi! I am Sreynech, How are you';
        str_ireplace("Hi!", "Hello!", $my_str, $count);
         echo "The text was replaced $count time.";
    ?>
        
    
</body>
</html>