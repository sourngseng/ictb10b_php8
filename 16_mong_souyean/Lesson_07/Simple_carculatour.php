<?php 
  $error = "";
  $x = "";
  $y = "";
  $result = "";
   if(isset($_POST['operation'])){
      $x = $_POST['num1'];
      $y = $_POST['num2'];
      $op = $_POST['operation'];

      if(is_numeric($x) && is_numeric($y)){  
            switch($op){
                case 'add' : $result = $x + $y;
                break;
                case 'minus' : $result = $x - $y;
                break;
                case 'multiply' : $result = $x * $y;
                break;
                case 'divide' : $result = $x / $y;
                break;
            }
        }else{ 
            echo '<script>alert("Please Input Numbers!!")</script>';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   </style>
</head>
<body>
<div class="container col-md-4 mt-5 card pb-3 ">
  <h2><u>សូមបញ្ចូលលេខខាងក្រោម</u></h2>  
  <form action="<?= $_SERVER['PHP_SELF']  ?>" method="POST">
        <div class="mb-3 mt-3">
            <label for="num1"><h4>Num1</label>
            <input type="number" name="num1" id="num1" value="<?= $x?>"></h4>
        </div>
        <div class="mb-3">
            <label for="num2"><h4>Num2</label>
            <input type="number" name="num2" id="num2" value="<?= $y?>"></h4>
        </div>
        <div style="text-align: center;" class="mb-3">
            <input class="bg-success text-white" type="submit" value="add" name="operation">
            <input class="bg-warning text-white" type="submit" value="minus" name="operation">
            <input class="bg-danger text-white" type="submit" value="multiply" name="operation">
            <input class="bg-info text-white" type="submit" value="divide" name="operation">

        </div>
        <div class="mb-3 ">
            <label class="d-flex justify-content-center" for="result"><h4>Result<br></h4></label>
            <h4  class="d-flex justify-content-center"><input type="number" id="result" value="<?= $result?>" ></h4>
        </div>
        
        </div>

            </form>
    
</body>
</html>  
        
   