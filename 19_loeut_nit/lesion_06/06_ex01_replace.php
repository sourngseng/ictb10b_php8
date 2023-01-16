<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="color:red;font-family:AKbalthom Freehand ;background:rgba(0,0,0,0.1)">
<?php 
 @$result=null;
if(isset($_POST['submit'])){
       @$repplace=$_POST['replace'];
       @$textreplace1=$_POST['replace1'];
       @$textreplace2=$_POST['replace2'];
       @$result=str_replace($textreplace1,$textreplace2,$repplace);
    }
?>
<div class="container mt-3">
  <h2>Mrr Nit</h2>
  <p>Find and Replace string</p>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <div class="mb-3 mt-3">
      <label for="comment">Comments:</label>
      <textarea class="form-control" rows="2" id="comment" name="replace">do you know how to swim</textarea>
    </div>
  <div class="mb-3 mt-3">
      <label for="text">Replace_A:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter replace1" name="replace1">
    </div>
    <div class="mb-3">
      <label for="replace">Replace_B:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter replace2" name="replace2">
    </div>
    <div class="mb-3 mt-3">
      <label for="comment">Results:</label>
      <textarea class="form-control" rows="5" id="result" name="result"><?php echo "$result"; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary"value="submit" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
