<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    h2{
        margin-left: 150px;
    }
</style>
<body>
    <?php 
    $resuft=null;
    if(isset($_POST['submit'])){
        $textword=$_POST['text_word'];
        $replace=$_POST['replace_word'];
        $comment=$_POST['text'];
        $result=str_replace($comment,$textword,$replace);
    }
    ?>
<h2>Find and Replace String</h2>
</div>
<div class="container mt-3">
  <form action="06_ex01_replace.php" method="post">
    <div class="mb-3 mt-3">
      <label for="comment">Comments:</label>
      <textarea class="form-control" rows="3" id="comment" name="text">To day I want to tell you how to install Mycrosoft.</textarea>
    </div>
  </form>
</div>

<div class="container mt-3">
    <div class="mb-3 mt-3">
      <label for="fw">Fine word :</label>
      <input type="text" class="form-control" id="fw" placeholder="Enter word" name="text_word">
    </div>
    <div class="mb-3">
      <label for="rw">replace word:</label>
      <input type="text" class="form-control" id="rw" placeholder="Enter word" name="replace_word">
    </div>
    
</div>
<div class="container mt-3">
    <div class="mb-3 mt-3">
      <label for="comment">Result:</label>
      <textarea class="form-control" rows="3" id="comment" name="result"><?php echo $result; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</body>
</html>
