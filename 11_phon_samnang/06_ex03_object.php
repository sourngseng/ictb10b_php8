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
        //កាបង្កើត Class
        class People{
            //create properties / attribudes
            private $fName;
            private $lName;

            public function setName($first_name,$last_name)
            { 
                $this->fName=$first_name;
                $this->lName=$last_name;
            }

            //Create Methods / functions
            public function showFullname()
            {
                return ($this->fName ." ".$this->lName);
            }
        }
    ?>
    <?php
        //កូដខាងក្រោមនេះគឺដើម្បីចាប់តម្លៃពី input control តាមឈ្មោះរបស់វា
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];

        //create object from class people
        //$objectName=new ClassName;

        $person=new People();
        $person->setName($fName,$lName);
    ?>
    <form action="06_ex03_object.php" methods="post">
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">   
        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">   
        </div>
        <div style="margin-bottom: 15px;">
            <input style="margin-left: 120px;" type="submit" vslue="Save">   
        </div>
    </form>
    <h3>
        <?php
            //ការបង្ហាញតម្លៃចេញពីអថេរដែលបានប្រកាស $fName និង​ $lName
            //echo ៉​ឈ្មោះរបស់អ្នកគឺ : "$fName . " " .$lName;
            echo "ឈ្មោះរបស់អ្នកគឺ : ". $person->showFullName();

            var_dump($person);
        ?>
    </h3>
</body>
</html>
