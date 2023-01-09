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
    @$_name=$_GET['name'];
    @$_gender=$_GET['gender'];
    @$_email=$_GET['email'];
    @$_pswd=$_GET['pswd'];
    @$_address=$_GET['address'];
    @$_phonenumber=$_GET['phonenumber'];
?>
<div class="container mt-3 ">
  <div class="row">
    <div class="col-md-6 bg-info card pd-5">
        <h2>បញ្ជូលពត៌មាន</h2>
<form action="05_ex05_form_post.php">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="gender">Gender:</label>
      <input type="gender" class="form-control" id="gender" placeholder="Enter gender" name="gender">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="mb-3 mt-3">
      <label for="phonenumber">PhoneNumber:</label>
      <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Enter your phonenumber" name="phonenumber">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me 
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>
  
  
    <div class="col-md-6 bg-success card pd-5">
        <h2>លទ្ធផលក្រោយ submit</h2>
        <h3>Name:<span class="badge bg-danger"><?php echo $_name; ?></span></h3>
        <h3>Gender:<span class="badge bg-danger"><?php echo $_gender; ?></span></h3>
        <h3>Email:<span class="badge bg-danger"><?php echo $_email; ?></span></h3>
        <h3>Address:<span class="badge bg-danger"><?php echo $_address; ?></span></h3>
        <h3>Password:<span class="badge bg-danger"><?php echo $_pswd; ?></span></h3>
        <h3>PhoneNumber:<span class="badge bg-danger"><?php echo $_phonenumber; ?></span></h3>
    </div>
</div>
</div>
</body>
</html>