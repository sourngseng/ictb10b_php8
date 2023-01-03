
<?php
    $card=array("Loeut_Nit","Moung_souyean","Phea_seyha","Niev_manath",
                "Srey_Vouk","Nhek_sak","Thai_rasin","Lo_sreypich");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <style>
    .card-img-top{
      height: 400px;
      border:1px solid red;
    }
    .card{
      margin:20px
    }

   </style>
 </head>
<body style="font-family:AKbalthom Freehand">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">DOWNLOAD</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--សម្រាប់រាយនាមក្នងខាត!-->
<center style="font-size:30px">My friends in clase ictb10b</center>
<div class="row">
    <?php
        for($i=0;$i<=7;$i++){
    ?>
        <div class="col-md-3 mb-3">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="./img/<?php echo"rop".$i; ?>.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $card[$i]; ?></h4>
    
                    <p class="card-text">my name is. <strong><?php echo $card[$i]; ?></strong> i am study in school teacho sen</p>
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
  <div class="container mt-3 center" >
  <h2>table for input Name and address</h2>          
  <table class="table table-info table-striped  ">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Loeut</td>
        <td>Nit</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Niev</td>
        <td>Maneth</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Phea</td>
        <td>Seyha</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Moung</td>
        <td>SouYean</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Eng</td>
        <td>Sopheap</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Ngek</td>
        <td>Sak</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Khoun</td>
        <td>Heat</td>
        <td>SiemReap</td>
      </tr>
      <tr>
        <td>Seng</td>
        <td>Sourng</td>
        <td>SiemReap</td>
      </tr>
    </tbody>
  </table>
</div>
  
</body>
</html>
