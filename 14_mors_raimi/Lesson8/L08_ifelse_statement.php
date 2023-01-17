<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using if statement</title>
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
    <h4>ការប្រើប្រាស់​ <span>if </span>Statement</h4>
    <?php

    date_default_timezone_set('Asia/Phnom_Penh');
    echo date_default_timezone_get();
    $checkHours=date('H');
    $fullHour=date('H:i:s a');
    echo "<h5>Current Hour is : $checkHours</h5>";
    echo "<h5>Current Hour is : $fullHour</h5>";

    if($checkHours>10){
        echo "<h5>អរុណសួស្តី​ ក្រោកពីគេងហើយ</h5>";
        echo "<h5>​រៀនសរសេរកូដស្រួលណាស់ but i'm cryed when i saw it!</h5>";
    }else{
        echo "<h5>កុំរំខានខ្ញុំអី កំពុងគេងស្រួលណាស់!</h5>";
        echo "<h5>ចាំក្រោក​សិន នាំផឹក!</h5>";
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
        if($username=="morsraimi"){
            echo "<h4>Well come to my heart!</h4>";
        }else{
            echo "<h4>សូមព្យាយាមម្តងទៀតនៅជាតិក្រោយ!</h4>";
        }
    }
?>


</body>
</html>