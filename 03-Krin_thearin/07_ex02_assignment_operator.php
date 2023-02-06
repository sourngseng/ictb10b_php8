<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment operator</title>
</head>
<body>
    <?php
    echo"<b>គណនាប្រមាណវិធីខាងក្រោមដោយប្រើassignment operator</b>";
    echo"<br>";
    $a=45;
    $a +=10;
    echo $a;
    echo"<br>";
    $b=50;
    $b -=10;
    echo $b;
    echo"<br>";
    $c=50;
    $c *=10;
    echo $c;
    echo"<br>";
    $d=50;
    $d /=10;
    echo $d;
    echo"<br>";
    $h=50;
    $h %=10;
    echo $h;
    echo"<br>";
    ?>
    <?php
       $sum=0;
    if(isset($_POST['submit'])){
        echo"Submit button is click.";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number1 =$_POST['number1'];
            $number2 =$_POST['number2'];
            
            $sum =$number1+$number2;
        }
    }else{
        echo "ទិន្នន័យមិនទាន់ត្រូវបាន submit";
    }
    ?>
   <h2>គណនាផលបូកនៃកន្សោមខាងក្រោម៖</h2>
    <form action="07_ex02_assignment_operator.php" method="post">
        <div style="padding:15px;">
            <label for="number1">Value1:</label>
            <input type="number" name="number1">
        
        </div>
        <div style="padding-left:15px; padding-bottom:15px;">
        <label for="number2">Value2:</label>
        <input type="number" name="number2">
    
    </div>
    <button type="submit" name="submit"​>Caculate</button>
    <h2>លទ្ធផលនៃផលបូកគឺ=<?php echo $sum;?></h2>
    </form>
    
    
    
    
</body>
</html>