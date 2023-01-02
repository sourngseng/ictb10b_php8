<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <style>
    input{
        margin-left:20px;
        margin-top:30px;
        margin-button:10px;
    }
 </style>
</head>
<body >
    <?php 
     class people{

        // private $fname;
        // private $lname;
         public function setname($fname,$lname){
            $this->firstname=$fname;
            $this->lastname=$lname;
         }
         public function outputname(){
            return ($this->firstname." ".$this->lastname);
         }
     }
?>
<?php
@$firstname=$_POST['fname'];
@$lastname =$_POST['lname'];
$person=new people();
$person->setname($firstname,$lastname);

?>
<form action="05_ex07_form_class.php" method="post">
    <b>FirstName:</b><input type="text" name="fname" placeholder="Input FirstName" ><br>
    <b>last  Name:</b><input type="text" name="lname"placeholder="Input lastName" ><br>
    <input type="submit" value="Save">
</form>
<h3>
    <?php 
    echo "ឈ្មោះពេញរបស់អ្នកគឺ៖".$person->outputname();
    var_dump($person);
    ?>
</h3>
</body>
</html>