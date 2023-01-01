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
         $color=array("bg-dark","bg-info","bg-warning","bg-danger");
         @$name=$_GET['name'];
         @$subject=$_GET['subject'];
         @$gender=$_GET['gender'];
         @$background=$_GET['background'];

     ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6  bg-danger text-white card pb-4">
        <h2>Stacked form</h2>
  <form action="05_ex06_form_array.php">
    <div class="mb-3 mt-3">
      <label for="email">InputName:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter yourname" name="name">
    </div>
    <div class="mb-3">
      <label for="text">SubjectName:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter password" name="subject">
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
                <div class="mb-3 mt-3">
                <label for="sel1" class="form-label">Select background-color:</label>
    <select class="form-select" id="select1" name="background">
      <option value="bg-dark"   >bg-dark   </option>
      <option value="bg-info"   >bg-info   </option>
      <option value="bg-warning">bg-warning</option>
      <option value="bg-danger" >bg-danger </option>
    </select>
                </div>
              </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        </div>
        <div class="col-md-6 <?php echo $background==''?'bg-dark':$background; ?> card pb-5 text-white">
            <h2 class="pt-3">After Submit</h2>

                <h3>Name : <span class="badge bg-danger">        <?php echo  $name; ?></span></h3>
                <h3>Subject Name : <span class="badge bg-danger"><?php echo $subject; ?></span> </h3>
                <h3>Gender : <span class="badge bg-danger">      <?php echo $gender; ?></span> </h3>
                
        </div>
    </div>
 
</div>

</body>
</html>
