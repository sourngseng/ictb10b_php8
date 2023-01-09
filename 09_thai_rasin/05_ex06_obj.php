<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello object</title>
</head>
<body>
    <?php
    @$fName=$_POST['firstName'];
    @$lName=$_POST['lastName'];
    
    $person=new People();
    $person->setName($fName,$lName);


    ?>
    <?php
    class People{
        private $fName;
        private $lName;
        public function setName($first_name,$last_name){
            $this->fName=$first_name;
            $this->lName=$last_name;
        }
        public function showFullName(){
            return ($this->fName ." ".$this->lName);
        }
    }



    ?>
    <form action="05_ex06_obj.php"method="post">
        <div style="margin: bottom 15px;">
            <label for="fname">Fisrst Name:</label>
            <input type="text" id="fname" name="firstName">


        </div>
        <div style="margin-bottom: 15px;">
            <label for="lnmae">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>
        <input style="mardin-left: 120px;"type="submit"value="Save">
    </form>
    <h3>
        <?php
        echo "ឈ្មោះពេញរបស់អ្នកគឺ :". $person->showFullName();

        var_dump($person);
        ?>
    </h3>
    
</body>
</html>