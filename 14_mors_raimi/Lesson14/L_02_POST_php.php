<!DOCTYPE html>
<html lang="en">
<head>
     <title>Example of get in php method</title>
</head>
<body>
     <?php
        if(isset($_POST['name'])){
            echo "<p>Hi, " . $_POST["name"] . "</p>";
        }
    ?>
    <form action="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="inputName">Nmae:</label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">
    </form>

 </body>
</html>