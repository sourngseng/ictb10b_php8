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
        $x = 10;
        echo $x;
        echo "<br>";

        $x = 20;
        $x += 30;
        echo $x;
        echo "<br>";

        $x = 50;
        $x -= 20;
        echo $x;
        echo "<br>";

        $x = 5;
        $x *= 25;
        echo $x;
        echo "<br>";

        $x = 50;
        $x /= 10;
        echo $x;
        echo "<br>";

        $x = 100;
        $x %= 15;
        echo $x;
        echo "<br>";
    
    ?>

    <?php
        $sum=0;
        if(isset($_POST['submit'])){
            echo "Submit button is click.";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $sum=$num1+$num2;
            }
        } else {
            echo "Data is not submitted";
        }
    ?>
    <form action="07_ex02_Assignment.php" method="post">
        <div style="padding: 15px;">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1">
        </div>
    
        <div style="padding: 15px;">
            <label for="num2">Number 2:</label>
            <input type="number" name="num2">
        </div>

        <button style="margin-left: 20px;" type="submit" name="submit">Calulate</button>
    
    </form>
    <h2>Result of Sum = <?php echo $sum; ?></h2>
</body>
</html>