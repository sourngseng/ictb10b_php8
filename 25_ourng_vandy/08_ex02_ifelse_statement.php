<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using if Statement</title>
</head>
<body>
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
    <h4>ការប្រើប្រាស់​ <span>if </span>Statement</h4>
    <?php
    
    echo "<hr>";
    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";

    if(13>$checkHours&&$checkHours>1){
        echo "<h5>នេះគឺចន្លោះម៉ោង1:00am-12:00am</h5>"; 
    }
    else{
        echo "<h5>នេះគឺចន្លោះម៉ោង1:00pm-12:00pm</h5>"; 
    }


    ?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>
        <label for="username">Enter Username:</label>
        <input type="text" name="username" id="username"
        placeholder="បញ្ចូល Username"
        >
        <input type="submit" value="Submit">
    </p>
</form>

<?php 
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        // echo $username;
        if($username=="Van dy"){
            echo "<h4>សូមស្វាគមន៍ មកកាន់ថ្នាក់ ICTB10!</h4>";
        }else{
            echo "<h4>សូមព្យាយាមលើកក្រោយទៀត សូមអរគុណ!</h4>";
        }
    }
?>

</body>
</html>