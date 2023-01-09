<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    input{
        margin: 10px;
    }
    .A{
        margin-left: 100px;
    }
</style>
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

                public function showFullName()
            {
                return ($this->fName ." ".$this->lName);
            }
        }
    ?>
    <?php 
        @$fName=$_POST['firstname'];
        @$lName=$_POST['lastname'];


        $person=new people();
        $person->setName($fName,$lName);
    ?>
    <form action="05_ex05_form_class.php" method="post">
        <b>FirstName :</b><input type="text" id="fName" name="firstname"><br>
        <b>LastName :</b><input type="text" id="lName" name="lastname"><br>
        <div class="A"><input type="Submit" value="save"></div>
    </form>
    <h3>
        <?php 
            echo "ឈ្មោះពេញរបស់អ្នកគី :".$person->showFullName();
            var_dump($person);
        ?>   
    </h3>
        
</body>
</html>