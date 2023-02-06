<?php
    echo "Testing GLobale Variable";
    $txt ="<h1>Hello World</h1>";
    $number =10;
    echo $txt;
    echo "<h1>$number</h1>";
?>

echo "<br>";
<?php
    $t = 1;
    do{
	$t++;
    echo "Have a good day!";
    } while($t<=3);
     
?>
echo "<br>";
<?php
 

 for ($t=1; $t<=3; $t++) {
 echo "Have a good morning!"."<br>";
 
 }  

?>


<?php
 $colors = array("Red", "Blue", "Green");
 foreach($colors as $value){
    echo $value."<br>";
 }
?>
<?php
$sub = array(
    "name" => "peter park",
    "email" => "peterpark@gmail.com",
    "age" => 32
);
foreach($sub as $key => $value)
echo $key . " :" .$value . "<br>";


?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>How to use sweet alert using PHP - Devnote.in</title>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
<h1>How to use sweet alert using PHP - Devnote.in</h1>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
    });
</script>
</body>
</html>



<!DOCTYPE html>
<html>
    <head>
        <title>How to use sweet alert using PHP - Devnote.in</title>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
<h1>How to use sweet alert using PHP - Devnote.in</h1>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Are you sure!",
            text: "Do you really want to remove user!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                swal("Yaa! User successfully deleted!", {
                    icon: "success",
                });
            } else {
                swal("User not deleted your user is safe!", {
                    icon: "error",
                });
            }
        });
    });
</script>
</body>
</html>
 -->


 <?php

$sum=0;
for($i=1;$i<=5;$i++)
{
$sum=$sum+$i;
}

echo "The sum of 1 to 5 = ".$sum;
 
?>
    
<!--<?php
echo "<br>";
for($i=1;$i<=10;$i=$i+2)
{
echo $i;
}

?>

<?php
echo "<br>";

$even="";
$odd="";

for($i=1;$i<=50;$i++)
{
if($i%2==0)
{
$even = $even . " " .$i ;
}
else
{
$odd = $odd . " " .$i;
}
}

echo "The Even no = " . $even ."<br/>";
echo "The Odd no = " . $odd;

?>

<?php
echo "<br>";
for($i=1;$i<8;$i++)
{
for($j=1;$j<=$i;$j++)
{
echo $i;
}
echo "<br/>";
}

?>


<?php
echo "<br>";
$arr = array(1,2,3,4,5);
foreach($arr as $value)
{
echo $value * 3;
echo "<br>";
}
?>


<?php
echo "<br>";
$even="";
$odd="";
$arr = array(1,2,3,4,5);
foreach($arr as $value)
{

if($value%2==0)
{
$even=$even ." " . $value;
}
else
{
$odd=$odd . " ".$value;
}

}
echo "The even elements are = ".$even . "<br/>";
echo "The odd elements are = " .$odd ;
?>


<?php  
echo "<br>";
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 
?>  

<?php
echo "<br>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?> -->
