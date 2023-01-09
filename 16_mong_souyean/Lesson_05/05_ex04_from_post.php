<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Freehand', cursive;">
 

</style>
<?php 
    @$_name=$_GET['name'];
    @$_gender=$_GET['gender'];
    @$_address=$_GET['address'];
    @$_email=$_GET['email'];
    @$_pswd=$_GET['pswd'];
    @$_phonenumber=$_GET['phonenumber'];
    @$_remmber=$_GET['remember']
?>
<div class="container mt-3 ">
  <div class="row">
    <div class="col-md-6 bg-info card pd-5">
        <h2>បញ្ជូលពត៌មាន</h2>
<form action="05_ex04_from_post.php" method="GET">
    <div class="mb-3 mt-3">
      <label for="name">នាមខ្លួន:</label>
      <input type="name" class="form-control" id="name" placeholder="សូមបញ្ចូលឈ្មោះ" name="name">
    </div>
    <div class="mb-3 mt-3">
                <label for="gender">ភេទ</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="ប្រុស" checked>
                    <label class="form-check-label" for="radio1">ប្រុស</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="ស្រី">
                    <label class="form-check-label" for="radio2">ស្រី</label>
                </div>
              </div>
              <div class="mb-3 mt-3">
      <label for="address">អាស័យដ្ធាន:</label>
      <input type="address" class="form-control" id="address" placeholder="សូមបញ្ចូលអាស័យដ្ធាន" name="address">
    </div>
    
    <div class="mb-3 mt-3">
      <label for="pwd">លេខសម្ងាត់:</label>
      <input type="password" class="form-control" id="pwd" placeholder="បញ្ចូលលេខសម្ងាត់" name="pswd">
    </div>
 
    <div class="mb-3 mt-3">
      <label for="email">អុីម៉ែល:</label>
      <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email">
    </div>

      
   
    <div class="mb-3 mt-3">
      <label for="phonenumber">លេខទូរស្ទព័ទំនាក់ទំនង:</label>
      <input type="phonenumber" class="form-control" id="phonenumber" placeholder="លេខទូរស្ទព័ទំនាក់ទំនង" name="phonenumber">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">ចងចាំទិន្នន័យ</label>
      
    </div>
    <button type="submit" class="btn btn-primary">បញ្ចូន</button>
  </form>

    </div>
  
  
    <div class="col-md-6 bg-success card pd-7">
        <h2>ការបញ្ចូលពត៏មានផ្ទាល់ខ្លួ​ន</h2>
        <h3>នាមខ្លួន:<span class="badge bg-danger"><?php echo $_name; ?></span></h3>
        <h3>ភេទ:<span class="badge bg-danger"><?php echo $_gender; ?></span></h3>
        <h3>អាស័យដ្ធាន:<span class="badge bg-danger"><?php echo $_address; ?></span></h3>
        <h3>លេខសម្ងាត់:<span class="badge bg-danger"><?php echo $_pswd; ?></span></h3>
        <h3>អុីម៉ែល:<span class="badge bg-danger"><?php echo $_email; ?></span></h3>
        <h3>លេខទូរស្ទព័ទំនាក់ទំនង:<span class="badge bg-danger"><?php echo $_phonenumber; ?></span></h3>
        <h3>ចងចាំទិន្នន័យ:<span class="badge bg-danger"><?php echo $_remmber; ?></span></h3>
    </div>
</div>
</div>
</body>
</html>