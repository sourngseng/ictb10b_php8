<!DOCTYPE html>
<html lang="en">
<head>
  <title>Using Form to Find and Replace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Summernote -->
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>
<body>
  <?php
        $result=null;
        $detail=null;
        $txtFind=null;
        $txtReplace=null;
        $txtReplace_new=null;
      if(isset($_POST['submit'])){
          $txtFind=$_POST['find_text'];
          $txtReplace=$_POST['replace_text'];
          // $txtReplace="<span style='color:red;'>$txtReplace</span>";
          $txtReplace_new="<span style='color:red;'>$txtReplace</span>";
          $detail=$_POST['detail'];
          $result=str_replace($txtFind,$txtReplace_new,$detail);
      }  
  ?>
<div class="container mt-3">
  <h2>Find and Replace String</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   
    <div class="mb-3">
        <label for="your_text">Your Text:</label>
        <textarea class="form-control" rows="2" 
        id="your_text" name="detail"><?php echo $detail; ?></textarea>
    </div>

    <div class="mb-3">
      <label for="find_text">Find Word:</label>
      <input type="text" class="form-control" id="find_text"
        value="<?php echo $txtFind; ?>"
       placeholder="Search word.." name="find_text">
    </div>
    <div class="mb-3">
      <label for="replace_txt">Replace Word:</label>
      <input type="text" class="form-control" id="replace_txt" 
      value="<?php echo $txtReplace; ?>"
      placeholder="Replace word.." name="replace_text">
    </div>
    <div class="mb-3">
        <label for="summernote">Result:</label>
        <textarea class="form-control" rows="4" 
        id="summernote" name="result"
        style="font-family: hanuman;"
        ><?php echo $result; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" 
    value="submit" name="submit">Find and Replace</button>
  </form>
</div>

<script>
    // $(document).ready(function() {
    //     $('#summernote').summernote();
    // });

    $('#summernote').summernote({
        height: 150,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
    });
</script>

</body>
</html>
