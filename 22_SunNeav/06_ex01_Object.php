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

            Public function setName($first_name,$last_name)
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
                <form action="05_ex05_form2.php" method="post">
                    <div style="margin-bottom: 15px;">
                       <lable for="fname">First Name:</lable>
                       <input type="text" id="fname" name="firstName">
                    </div>

                    <div style="margin-bottom: 15px;">
                      <lable for="lname">Last Name:</lable>
                      <input type="text" id="lname" name="lastName">
                    </div>
                    <input style="margin-laft: 120px," type="submit" value="Save">
                </form>
                        <h3>
                           <?php
                           echo "ឈ្មោះពេញរបស់អ្នកគឺ​ : " .$person->showFullName();
                           
                           var_dump($person);
                           ?>
                         </h3>
                
</body>
</html>