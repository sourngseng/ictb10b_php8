<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class people{
            private $fName;
            private $lName;
            public function setName($first_name,$last_name)
            {
                $this->fName=$first_name;
                $this->lName=$last_name;
            }
            public function showfullName()
            {
                return ($this->fName ." " .$this->lName);
            }
        }
    ?>

    <?php
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];

        $person=new people();
        $person->setName($fName,$lName);
    ?>
   

    <form action="05_ex04_object.php"method="post">
        <div style="margin-bottom: 15px;">
            <label for="fName">first Name:</label>
            <input type="text"id="fname" name="firstName">

        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text"id="lname" name="lastName">
        </div>
        <input style="margin-left: 120px;" type="submit" value="save">
    </form>
    <h3>
        <?php
        echo "ឈ្មោះពេញរបស់អ្នកគឺ​ :". $person->showfullName();
        var_dump($person);
        ?>
    </h3>
</body>
</html>