<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      h1{
        text-align:center;
      }
  </style>
</head>
<body>
  <?php

    @$sum=$_POST['num1'];
    @$sum1=$_POST['num2'];
    @$result=$sum+$sum1;
    @$result1=$sum-$sum1;
    @$result2=$sum*$sum1;
    @$resultb=$sum/$sum1;
    
  ?> <h1  class="text-info ">ប្រមាណវិធីសម្រាប់ Operator in php8</h1>
  <div class="container">
     
     <div class="row">
      <div class="col-md-6">
                <form action="07_ex03_value_arithmetic.php" class="bg-dark pt-4 " method="post" >
                <div class="mb-3">
                    <label for="number">InputNumber1:</label>
                    <input type="number" class="form-control" id="number" placeholder="Enter YourNumber1" name="num1">
              </div>
              <div class="mb-3 ">
                <label for="number">InputNumber2:</label>
                <input type="number" class="form-control" id="number" placeholder="Enter YourNumber2" name="num2">
              </div>
                <div class="pb-4">
                    <input class="btn btn-primary" type="submit" value="SUBMIT (+,-,*,/,%)">
                    <!-- <input type="submit" value="SUBMIT (-)" >
                    <input type="submit" value="SUBMIT (*)">
                    <input type="submit" value="SUBMIT (/)"> -->
                  </div>
                </form></div>
      <div class="text-info col-md-6 bg-primary">
           <h2>Result of num1+num2=<?php echo "$result";?></h2>
           <h2>Result of num1-num2=<?php echo "$result1";?></h2>
           <h2>Result of num1*num2=<?php echo "$result2";?></h2>
           <h2>Result of num1/num2=<?php echo "$resultb";?></h2>
          
      </div>
    </div>
    </div>
</body>
</html>