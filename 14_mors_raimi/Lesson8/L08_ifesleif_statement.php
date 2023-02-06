<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using if else if statement</title>
    <style>
        body{
            font-family: 'Courier New', "Hanuman", monospace;
        }
        h4{
            font-size: x-large;
        }
        h5{
            font-size: medium;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h4>ការប្រើប្រាស់​ <span>if elseif else </span>Statement</h4>
    <h5>បញ្ចូលពត៌មានពិន្ទុសិស្ស</h5>
    <hr>
    <?php 
    $cpp=$math=$php8=0;
    if(isset($_POST['cpp'])){
           $cpp=$_POST['cpp'];
    }
    if(isset($_POST['math'])){
        $math=$_POST['math'];
 }
 if(isset($_POST['php8'])){
    $php8=$_POST['php8'];
}


    if(isset($_POST['bntCal'])){
        $totalScore=$cpp+$math+$php8;
        $avg=$totalScore/3;
        if($avg>=90){
            $grade='A';
        }elseif($avg>=80){
            $grade='B';
        }elseif($avg>=70){
            $grade='C';
        }elseif($avg>=60){
            $grade='D';
        }elseif($avg>=50){
            $grade='E';
        }else{
            $grade='F';
        }
    }

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label for="cpp">C++</label>
            <input type="number" max="100" min="0" 
            name="cpp" id="cpp"
            value="<?php echo $cpp; ?>"
            >
        </p>
        <p>
            <label for="math">Math</label>
            <input type="number" max="100" min="0" 
            name="math" id="math"
            value="<?php echo $math; ?>"
            >
        </p>
        <p>
            <label for="php8">PHP8</label>
            <input type="number" max="100" min="0" 
            name="php8" id="php8"
            value="<?php echo $php8; ?>"
            >
        </p>
        <input type="submit" name="bntCal" value="Calculate">

        <p>
            <label for="totalscore">Total Score:</label>
            <input type="number" max="999" min="0" 
            name="totalscore" id="totalscore"
            value="<?php echo @$totalScore; ?>"
            >
        </p>
        <h4>ពិន្ទុសរុប : <span><?php echo @$totalScore; ?></span></h4>
        <h4>មធ្យមភាគ : <span><?php echo @$avg; ?></span></h4>
        <h4>និទ្ទេស : <span><?php echo @$grade; ?></span></h4>
    </form>
</body>
</html>


 