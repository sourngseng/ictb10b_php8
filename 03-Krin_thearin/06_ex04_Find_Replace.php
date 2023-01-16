<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find and Replace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Find and Replace</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="search">comments:</label>
      <input type="search" class="form-control" id="search" placeholder="" name="email">
    </div>
    <div class="mb-3">
      <label for="find">Find word:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter the word.." name="Find word">
    </div>
    <div class="form-check mb-3">
      <label class="Result">
        <input class="Result" type="text" name="result"> Result :</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
