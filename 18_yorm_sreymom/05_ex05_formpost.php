<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    @$_email=$_POST['email'];
    @$_pswd=$_POST['pswd'];
    @$_remember=$_POST['remember'];

?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 bg-info card pb-5">
            <h2>បញ្ចូលពត៌មាន</h2>
            <form action="05_ex05_form_post.php" method="post">
              <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <div class="mb-3">
                <label for="tlm">Password:</label>
                <input type="telegram" class="form-control" id="tlm" placeholder="Enter telegram" name="tlm">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6 bg-success card pb-5 text-white">
            <h2>លទ្ធផលក្រោយ Submit</h2>

                <h3>Email : <span class="badge bg-danger"><?php echo $_email; ?></span></h3>
                <h3>Password : <span class="badge bg-danger"><?php echo $_pswd; ?></span> </h3>
                <h3>Remember : <span class="badge bg-danger"><?php echo $_remember; ?></span> </h3> 
                <h3>telegram :<span clss=="badge bg-danger"><?php echo $_telegrm; ?></span> </h3>
                
        </div>
    </div>
</div>


</body>
</html>