<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculater</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
  <style>
    h2{
      color: red;
    }
    .container{
      text-align: center;
      border: 5px green solid ;
      border-radius: 8px;
    }
    input{
      text-align: center;
    }
  </style>
</head>
<?php 
    $op = " ";
    $result= " ";
    if(isset($_POST['operater'])){
      $op = $_POST['operater'];
      $Num = $_POST['num'];
    };
    switch($op){
      case 'dec_b' : $result= decbin($Num);
      break;
      case 'bi' : $result= bindec($Num);
      break;
      case 'Oct' : $result= decoct($Num);
      break;
      case 'dec_o' : $result= octdec($Num);
      break;
      case 'hex' : $result= dechex($Num);
      break;
      case 'dec_h' : $result= hexdec($Num);
      break;
    }
?>
<body>
  <div class="container col-md-4 mt-5 card">
  <h2><u>Number Converter</u></h2>
  <form action="<?= $_SERVER['PHP_SELF']  ?>" method="post">
<label for="operater"><h3>Choose oeration:</h3></label>
<select name="operater" id="operater" value="<?= $op ?>">
  <option value="dec_b">Decimal to Binary</option>
  <option value="bi">Binary to Decimal</option>
  <option value="Oct">Decimal to Oct </option>
  <option value="dec_o">Oct to Decimal</option>
  <option value="hex">Decimal to Hex</option>
  <option value="dec_h">Hex to Decimal</option>
</select>
        <div class="mb-3">
            <label for="num"><h4>Enter Num: <br></label>
            <input type="text" name="num" id="num"></h4>
        </div>
        <div class="mb-3">
          <button class="bg-danger text-white" type="submit">Calculate</button>
        </div>
        <div class="mb-3">
            <label for="Result"><h4>Result :<br></label>
            <input type="text" name="result" id="result" value="<?= $result ?>" disabled></h4>
        </div>
        
</div>
</form>
</body>
</html>