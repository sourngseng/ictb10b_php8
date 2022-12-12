<? php 
    echo "hello I'm seyha";
?>
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