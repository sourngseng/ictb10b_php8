<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lesson 04 : Variale and Constant</h1>

<?php
    // Declaring variables : ប្រកាសអថេរ
    $txt = "Hello World!";
    $number = 10;
    // Displaying variables value បង្ហាញតម្លៃអថេរ
    echo $txt; // Output: Hello World!
    echo "<br>";
    echo $number; // Output: 10
    
    $number = 23;
    echo "<br>";
    echo $number; // Output: 10    
?>


<?php
    // Defining constant
    define("SITE_URL", "https://www.tutorialrepublic.com/");
    // Using constant
    echo '<br>Thank you for visiting - ' . SITE_URL;

    define("databse_name","sourng_db");
    define("user_name","root");
    define("password","Pwd123");


    echo "<br>My Databse name is :". databse_name;
    // define("databse_name","my_db");

    echo "<br>My Databse name is :". databse_name;

?>


</body>
</html>