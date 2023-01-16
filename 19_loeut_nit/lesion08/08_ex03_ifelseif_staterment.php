<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>រកពិន្ទុសិស្សសរុបក្នងថ្នាក់រៀន</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <?php
    
     if(isset($_POST['cpp'])){
        @$cpp=$_POST['cpp'];
     } if (isset($_POST['math'])){
        @$math=$_POST['math'];
     } if (isset($_POST['php'])){
        @$php8=$_POST['php'];
     } if (isset($_POST['total'])){
        @$total=$cpp+$math+$php8;
     } 
     @$avg=$total/3;
     if ($avg>=90){
        $gread='A';
     }else if($avg>=80){
        $gread='B';
     }else if ($avg>=70){
        $gread='C';
     }else if ($avg>=60){
        $gread='D';
     }else if ($avg>=50){
        $gread='E';
     }else{
        $gread='F';
     }
     ?>
     <div class="container bg-danger text-dark mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3">
            <label for="cpp">CPP</label>
            <input type="number" name="cpp" id="cpp" max="100"min="0"placeholder="input score" class="form-control"value="<?php echo $cpp ?>">
        </div>
        <div class="mb-3">
            <label for="math">MATH</label>
            <input type="number" name="math" id="math"max="100"min="0"placeholder="input score"class="form-control"value="<?php echo $math ?>">
        </div>
        <div class="mb-3">
            <label for="php">PHP8</label>
            <input type="number" name="php" id="php"max="100"min="0"placeholder="input php score"class="form-control"value="<?php echo $php8 ?>">
        </div>
        <input type="submit" value="submit" class="btn btn-dark" name="total">
    </form>
    <h3 class="text-iinfo">totalScore:<span class="text-white"><?php  echo $total ?> </span></h3>
    <h3 class="text-iinfo">totalavg:<span   class="text-white"><?php   echo  $avg ?> </span></h3>
    <h3 class="text-iinfo">totalgread:<span class="text-white"><?php  echo $gread ?> </span></h3>

     </div>
</body>
</html>