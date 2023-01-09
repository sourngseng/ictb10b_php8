!DOCTYPE html>
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
         $result=null;
        if(isset($_POST['submit'])){
            $txtFind=$_POST['find_text'];
            $txtReplace=$_POST['replace_text'];
            $detail=$_POST['detail'];
            $result=str_replace($txtFind,$txtReplace,$detail);
        }

    ?>

<div class="container mt-3">
  <h2>Find and Replace String</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <div class="mb-3">
        <label for="comment"class="badge bg-warning">Comments:</label>
        <textarea class="form-control" rows="2" id="comment" name="detail">Hello, Everyone How are you?</textarea>
    </div>

    <div class="mb-3">
      <label for="find_text"class="badge bg-warning">Find Word:</label>
      <input type="text" class="form-control" id="find_text" placeholder="Search word.." name="find_text">
    </div>
    <div class="mb-3">
      <label for="replace_txt"class="badge bg-warning">Replace Word:</label>
      <input type="text" class="form-control" id="replace_txt" placeholder="Replace word.." name="replace_text">
    </div>
    <div class="mb-3">
        
        <label for="comment"class="badge bg-warning">Result:</label>
        <textarea class="form-control" rows="2" id="comment" name="result"><?php echo $result; ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
  </form>
</div>


</body>
</html>