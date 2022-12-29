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

<?php
    @$_FistName=$_GET['FistName'];
    @$_LastName=$_GET['LastName'];
    @$_email=$_GET['email'];
    @$_pswd=$_GET['pswd'];
    @$_remember=$_GET['remember'];
    @$_Gender=$_GET['Gender'];
    @$_Address=$_GEt{'Address'}

?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 bg-info card pb-5">
            <h2>បញ្ចូលពត៌មាន</h2>
            <form action="05_ex04_form.php">
                 <div class="mb-3 mt-3">
                 <label class="FistName">FistName:</lable>
                 <input type="text" class="form-control" id="FistName" placeholder="Enter FistName" name="FistName">
                 <label class="LastName">LastName:</lable>
                <input type="text" class="form-control" id="LastName" placeholder="Enter LastName" name="LastName">
                 </div>
                 <div class="mb-3 mt-3">
                <label for="Gender">Gender:</label>
                <input type="text" class="form-control" id="Gender" placeholder="Enter Gender" name="Gender">
              </div><div class="mb-3 mt-3">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address">
              </div>
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
                  <input class="form-check-input" type="checkbox" name="remember"> ប្រុស
                </label>
              </div>
              <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> ស្រី
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6 bg-success card pb-5 text-white">
            <h2>លទ្ធផលក្រោយ Submit</h2>

                <h3>FistName : <?php echo $_FistName;?></h3>
                <h3>LastName : <?php echo $_LastName;?></h3>
                <h3>Gender : <?php echo $_Gender;?></h3>
                <h3>Address : <?php echo $_Address;?></h3>
                <h3>Email : <?php echo $_email; ?></h3>
                <h3>Password : <?php echo $_pswd; ?> </h3>
                <h3>Remember : <?php echo $_remember; ?> </h3>
        </div>
    </div>
</div>

</body>
</html>