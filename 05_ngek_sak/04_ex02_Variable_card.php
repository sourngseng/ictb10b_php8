<?php 
    $personInfo=array("Sou yean","seyha","Sak","Nit","Heat");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Card Image</h2>
  <p></p>
  <div class="card" style="width:400px">
  <img class="card-img-bottom" src="./img/1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $personInfo[$i]; ?></h4>
      <p class="card-text"> <strong> <?php echo $personInfo[$i]; ?></strong>is an ICT Sutdent of Religional Polytechnic Institute of Techo Sen Seim Reap</p>
      <p>Phone</p>
      <p>Email</p>
      <p>Adress</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <div>
  <br>
  </div>
</body>
</html