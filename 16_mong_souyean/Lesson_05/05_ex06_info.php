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
       class person{
        private $firstname;
        private $lastname;

          public function fullname($first_name,$last_name)
          {
            $this->firstname=$first_name;
            $this->lastname=$last_name;
          }
          public function showfullname()
          {
            return ($this->firstname ." ".$this->lastname);
          }
       }
    
     
    ?>
    <?php 
        @$firstname=$_POST['firstname'];
        @$lastname=$_POST['lastname'];

          $people=new person();
          $people->fullname($firstname,$lastname);
           
    ?>
    <form action="05_ex06_info.php" method="POST">
        <div style="margin-top: 15px;">
            <label for="firstname">First Name: </label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div style="margin-top: 15px;">
            <label for="lastname">Last Name: </label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <input style="margin-left: 120px;" type="submit" value="save">
    </form>
    <h3>
        <?php 
       echo "ឈ្មោះពេញរបស់អ្នកគឺ៖    " .$people->showfullname();
       var_dump($people);
      
       ?>
    </h3>


</body>

</html>