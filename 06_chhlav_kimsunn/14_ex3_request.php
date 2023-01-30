<!DOCTYPE html>
<html lang="en">
<head>

    <title>Example of PHP REQUEST method</title>
</head>
<body>
<?php
if(isset($_REQUEST["name"])){
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>
<form method="request" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>
</html>