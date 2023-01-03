<?php 
    $personInfo=array("VAN NARA","CHOV BOPHA","OUN SUPHEA","KEO SYNA","SEANG SENGLY","YONG RATANA","SOK MALY","MAN CHAKRIYA");
    $pict=array("Vouk_10.jpg","Pich_09.jpg","Ny_08.jpg","Vandy_07.jpg")

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
  <h1 style="color:green">Personal Information</h1><h2 style="color:blue">ព័ត៌មានផ្ទាល់ខ្លួន</h2>

  <div class="row">
    <?php
        for($i=0;$i<=7;$i++){
    ?>
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 100%">
                <img class="card-img-top" src="./images/img_avatar1.png"  alt="Card image" style="width:100%">
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