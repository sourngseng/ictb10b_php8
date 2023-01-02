<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         class People{
            private $fName;
            private $lName;

            public function setName($fist_name,$last_name)
            {
                $this->fName=$fist_name;
                $this->lName=$last_name;
            }
            public function showfullname()
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
    
    <form action="06_ex01_Object.php" method="post">
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>        
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>        
        <input style="margin-left: 210px;" type="submit" value="Save">
    </form>
    <h3>
        <?php
        
        echo "ឈ្មោះពេញរបស់អ្នក : ". $person->showFullName();

        var_dump($person);
        ?>
    </h3>
</body>
</html>