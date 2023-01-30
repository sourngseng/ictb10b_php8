<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesion 08 if staterment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="font-family:Kh Writhand">
    <?php
           @$name=$_POST['user'];
           @$password=$_POST['passwd'];
     ?>
    <div class="container bg-info card mt-5">
        <h2><center>Loing Now</center></h2>
         <p class="text-dark">name:loeutnit ;   passwd: 123456789</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3 mt-3">
            <label for="user">InputName:</label>
            <input type="text"     name="user"   id="user"   class="form-control"placeholder="input now...">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" name="passwd" id="passwd" class="form-control"placeholder="input now...">
        </div>
        <div class="mb-3">
            <input type="submit" value="Submit" class="btn btn-dark">
        </div>
    </form>
           </div>
           <?php
           if (($name=$_POST['user'])=="loeutnit"&& ($password=$_POST['passwd'])==123456789) { ?>
           <div class="text-dark">
            <h1><center>IMAGES SIMPLE GIRLS</center></h1>
           </div>
            <div class="row">
            <?php for($i=0;$i<8;$i++){?>
                
                <div class="col-md-3 container">
                <div class="text-primiry"><h3>Loeut_Nit</h3></div>
                <img src="../img/img_avatar1.png"class="rounded mb-3 mt-3"width="300"height="226" alt="img_avatar1">
                </div>
              <?php  } ?>
            </div>
            
           <?php   }else{
                 echo "<center>លេខសំងាត់មិនទាន់ត្រិមត្រូវទេ</center><br>";
                 echo "<center> Pleass your try again ....</center>";
           }?>
          

</body>
</html>
</body>
</html>