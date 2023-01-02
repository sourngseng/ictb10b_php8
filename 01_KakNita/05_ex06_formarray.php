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
  <link href="https://fonts.googleapis.com/css2?family=Odor+Mean+Chey&display=swap" rel="stylesheet">
    <style>
        h3{
            color:white;
        }
    </style>
</head>
<body style="font-family:OdorMeanChey!important;">

<?php
    @$_fname=$_POST['firstName'];
    @$_lname=$_POST['lastName'];
    @$_gender=$_POST['gender'];
    @$_colors=$_POST['colors'];
    @$_email=$_POST['email'];
    @$_pswd=$_POST['pswd'];
    @$_nation=$_POST['nation'];
    $colors=array('Primary','Success','Info','Warning');
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 bg-info card pb-5">
            <h2 class="pt-3">បញ្ចូលពត៌មានផ្ទាល់ខ្លួន</h2>
            <form action="05_ex06_formarray.php" method="post">
              <div class="mb-3 mt-3">
                <label for="fname" class="pb-2">នាមត្រកូល:</label>
                <input type="text" class="form-control" id="fname" placeholder="នាមត្រកូល" name="firstName">
              </div>
              <div class="mb-3 mt-3">
                <label for="fname" class="pb-2">នាមខ្លួន:</label>
                <input type="text" class="form-control" id="fname" placeholder="នាមខ្លួន" name="lastName">
              </div>
              <div class="d-flex flex-wrap">
             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="radio1" value="ប្រុស">
                <label class="form-check-label" for="radio1">ប្រុស</label>
                </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="radio2" value="ស្រី">
                <label class="form-check-label" for="radio2">ស្រី</label>
                </div>
                </div>
               
            <div class="mb-3 mt-3">
                <label for="nation" class="form-label">សញ្ចាតិ:</label>
                <select class="form-select" id="nation" name="nation">
                <option>ខ្មែរ</option>
                <option>ចិន</option>
                <option>ជប៉ុន</option>
                <option>ថៃ</option>
                </select>
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
                    <label for="select_color" class="pb-2">ជ្រើសរើសពណ៌</label>
                    <select class="form-select" id="select_color" name="colors">
                        <?php 
                        foreach($colors as $value){
                            ?>
                                <option 
                                    value="bg-<?php echo strtolower($value); ?>">
                                    <?php echo $value; ?>
                                </option>
                            <?php                            
                        }
                        ?>
                        
                    </select>
                </div>
              <button type="submit" class="btn btn-primary">Display Data</button>
              
            </form>
        </div>
       
        <div class="col-md-6 <?php echo $_colors==''?'bg-secondary':$_colors; ?> card pb-5 text-white">
            <h2 class="pt-3">លទ្ធផលក្រោយ Submit</h2>
            <table class="table table-striped">
        <thead class="text-whith">
            <tr>
                <td>
                <h3>First Name : <span class="badge bg-danger"><?php echo $_fname; ?></span></h3>
                    </td>
                    </tr>
                    </thead>
               <tr> 
                <td>
                <h3>Last Name : <span class="badge bg-danger"><?php echo $_lname; ?></span> </h3>
                </td>
               </tr>
               <tr>
                <td>
                <h3>Gender : <span class="badge bg-danger"><?php echo $_gender; ?></span> </h3>
                </td>
                </tr>
                <tr>
                <td>
                <h3>Nation : <span class="badge bg-danger"><?php echo $_nation; ?></span> </h3>
                </td>
                </tr>
                <tr>
                <td>
         <h3>Email : <span  class="badge bg-danger"><?php echo $_email; ?></span></h3>
         </td>
         </tr>
         
         <tr>
            <td>
         <h3>Password : <span  class="badge bg-danger"><?php echo $_pswd; ?></span> </h3>
         </td>
         </tr>
         </table>
        </div>
    </div>
</div>
</div>
</body>
</html>