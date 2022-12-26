<?php 
    $personName=array("Ngek Sak","Sou Yean","Phea Seyha","Leout Nit","Khoun Heat","Chhay Sopheanuth");
    $personPhone=array("060740208","097347895","088346589","097542378","088763524","0978215198");
    $personAddress="Siem Reap Province Cambodia";
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
  <h2 style="text-align: center";><b><u>Personal Information-ព័ត៌មានផ្ទាល់ខ្លួន</u></b></h2>
  
  <div class="row">
  <?php
        for($i=0;$i<=5;$i++){
    ?>
        <div class="col-md-3 mb-3">
  
            <div class="card" style="width: 100%">
                <img class="card-img-top" src="./IMG/person<?php echo $i+1 ?>.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><b><?php echo $personName[$i]; ?></b></h4>
                    <p>Phone : <?php echo $personPhone[$i]; ?></p>
                    <p>Email : <?php echo $personName[$i]; ?>@gamil.com </p>
                    <p>Address :<?php echo $personAddress ?></p>
                    <p class="card-text"><b><?php echo $personName[$i]; ?></b>  is an ICT Student in RPITSSR!</p>
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