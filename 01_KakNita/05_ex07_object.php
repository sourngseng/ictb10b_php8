<!DOCTYPE html>
<html lang="en">
<head>
  <title>object Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Odor+Mean+Chey&display=swap" rel="stylesheet">
  <style>
   
  </style>
</head>
<body style="font-family:OdorMeanChey!important;">
    <?php
   class People{
        private $fName;
        private $lName;

        public function setName($first_name,$last_name)
        {
            $this->fName=$first_name;
            $this->lName=$last_name;
        }
        public function showFullName()
        {
            return ($this->fName ." ".$this->lName);
        }
   }
   ?>
   <?php
   @$fName=$_POST['firstName'];
   @$lName=$_POST['lastName'];

   $person=new People();
   $person->setName($fName,$lName);
?>

        <form action="05_ex07_object.php" method="post">
              <div style="margin: 20px;  width: 250px; ">
                <label for="fname" class="pb-2">នាមត្រកូល(firstName):</label>
                <input type="text" class="form-control"  id="fname" placeholder="នាមត្រកូល" name="firstName">
              </div>
              <div style="margin: 20px;  width: 250px;">
                <label for="lname" class="pb-2">នាមខ្លួន(lastName):</label>
                <input type="text" class="form-control"  id="lname" placeholder="នាមខ្លួន" name="lastName">
              </div>
              <input style="margin-left: 120px;margin-bottom:20px " type="submit" value="save" >
        </form>
        
        <h3 >
        <?php 
        echo "ឈ្មោះពេញរបស់អ្នកគឺ​ :".$person->showFullName();
        var_dump($person);
        ?>
    </h3>
</body>
</html>
