<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
        font-family:"AKbalthom Freehand";
    }
  </style>
</head>
<body>
    <?php
       @$email=$_GET['email'];
       @$pswd=$_GET['pswd'];
       @$remember=$_GET['remember'];
       @$addres=$_GET['add'];
       @$gender=$_GET['gender'];
       @$tel=$_GET['number'];
    ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 bg-dark text-white card pb-5">
            <h2>INPUT EMAIL</h2>
            <form action="05_ex04_form_get.php">
                <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-3">
                <label for="pwd">Gender:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter gender" name="gender">
                </div>
                <div class="mb-3">
                <label for="pwd">Address:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Address" name="add">
                </div>
                <div class="mb-3">
                <label for="pwd">Tel:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Enter phonumber" name="number">
                </div>
                <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
</div>

        
        <div class="col-md-6 bg-dark card text-white pb-5">
            <h1>Result after input</h1>
            <h2>Name:<span class="badge bg-warning"><?php echo "$email";?></span></h2>
            <h2>Password:<span class="badge bg-warning"><?php echo "$pswd"?></span></h2>
            <h2>Remember:<span class="badge bg-warning"><?php echo "$remember";?></span></h2>
            <h2>Geder:<span class="badge bg-warning"><?php echo "$gender";?></span></h2>
            <h2>Addres:<span class="badge bg-warning"><?php echo "$addres";?></span></h2>
            <h2>Tel:<span class="badge bg-warning"><?php echo "$tel";?></span></h2>

    </div>
  
</div>
</body>
</html>
