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
    //
    class people{
        //បង្កើតpropeties/attributes
       private $fName;
       private $lName;
       
       public function setName($first_name,$last_name)
       {
        $this->FName=$first_name;
        $this->lName=$lirst_name;
       }
       //បង្កើត Methods /functions
       public function showfullName()
       {
        return ($this->fName ."".this-lName);

       }
       }
       ?>
       <<?php
       //កូដខាងក្រោមនេះគឹដើម្បីចាប់តម្លៃinput contol​តាមឈ្មោះរបស់វា
       @$fName=$_POST['firstName'];
       @$lName=$_POST['lastName'];

       //បង្កើobjectចេញពី class people
       //$objectName=new class;
       $person=new people();
       $persron->setName($fName,$lName);
       ?>
       <form action="06_ex03_object.php"method="post"
       div style="margin-bottom:15px;"
       <label for="fname">first Name:</labe>
       <input type="text"id="fname"name="fiestName">
    </div>
    div style="margin-bottom:15px;"
       <label for="lname">Last Name:</labe>
       <input type="text"id="lName"name="fiestName">
    </div>
    <input sytle="margin-left:120px;"type="submit"value="save">
    </form>
    <h3>
        <?php
      echo "ឈ្មោះរបស់អ្នកគឺ:" .$person->showfu11Name();
      var_dump($person);
      ?>
      </h3>



    }
</body>
</html>