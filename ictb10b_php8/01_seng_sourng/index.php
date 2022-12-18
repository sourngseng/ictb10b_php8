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
    $txt = "www.rpitsr.edu.kh";
    echo "I love $txt!";
?>
<?php
    $txt = "www.rpitsr.edu.kh";
    echo "I love " . $txt . "!";
?>

ឧទាហរណ៍ខាងក្រោមនឹងបង្ហាញផលបូកនៃអថេរពីរ៖
<?php
    $x = 5;
    $y = 4;
    echo $x + $y;
?>


<?php
    // Defining constant
    define("SITE_URL", "https://www.rpitsr.edu.kh/");
    // Using constant
    echo '<br>Thank you for visiting - ' . SITE_URL;

    define("databse_name","sourng_db");
    define("user_name","root");
    define("password","Pwd123");

    echo "<br>My Databse name is :". databse_name;
    // define("databse_name","my_db");

    echo "<br>My Databse name is :". databse_name;
?>

<h1>Global Scope</h1>

<?php
    $x = 5; // global scope

    function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
?>


<h1>Using Local</h1>
<?php
    function myTestLocal() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTestLocal();

    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
?>

<h1>Using Global</h1>

<?php
    $x = 5;
    $y = 10;

    function myTestGlobal() {
        global $x, $y;
        $y = $x + $y;
    }

    myTestGlobal();
    echo $y; // outputs 15
?>


<?php
    $x = 5;
    $y = 10;

    function myTestGobal2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTestGobal2();
    echo $y; // outputs 15
?>




</body>
</html>