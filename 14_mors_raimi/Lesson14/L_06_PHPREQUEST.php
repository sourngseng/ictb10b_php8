<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_POST" action=" <?php  echo $_SERVER['PHP_SELF']?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //collage value of input field
            $name = $_REQUEST['fname'];
            if(empty($name)){
                echo "Name is emty";
            }else{
                echo $name;
            }
        }

    ?>
</body>
</html>