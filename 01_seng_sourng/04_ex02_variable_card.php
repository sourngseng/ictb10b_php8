<?php 
    $personInfo=array("Long Dara","Keo Thida","Som Chenda","Loy Vichet","Seng Sourng","Chhit Amouy","Pon Samnang");

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
  <h2>Personal Information-ព័ត៌មានផ្ទាល់ខ្លួន</h2>

  <div class="row">
    <?php
        for($i=0;$i<=6;$i++){
    ?>
        <div class="col-md-3 mb-3">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="./images/<?php echo "personal_".$i+1; ?>.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $personInfo[$i]; ?></h4>
                    <p>Phone :</p>
                    <p>Email :</p>
                    <p>Address :</p>
                    <p class="card-text">Some example text some example text. <strong><?php echo $personInfo[$i]; ?></strong> is an architect and engineer</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>                
        </div>
     <?php
        }
    ?>
    
    
  </div>

 
 
 
  
 
</div>

</body>
</html>
