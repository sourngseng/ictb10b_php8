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
      $my_str = 'Welcome ot Tutorial Republic';
      // outputs :28
      echo "Welcome ot Tutorial Republic :";//រាប់អក្សមួយៗ
      echo strlen ($my_str);
    ?>
    <br>
    <?php 
      $my_str = 'I love nech forever.';
      //outputs :4
      echo "I love nech forever :";//អានពាក្យ
      echo str_word_count($my_str);
    
    ?>
    <br>
    <?php 
    $my_str = 'If the facts do not fit the theory, change the facts .';
    //Display replaced string
    echo str_replace("facts", "truth", $my_str);
    ?>
   
</body>
</html>