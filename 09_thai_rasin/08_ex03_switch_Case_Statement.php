<?php
$today =date("D");
switch($today){
    case "Mon";
     echo"Today is Monday. Clean your house.";
     break;
    case "Tue";
     echo"Today is Tuesday. Buy some food.";
     break;
    case "Wed";
     echo"Today is Wednesday. Visit a doctor."; 
     break;
    case "Thu";
     echo"Today is Thursday.Repair your car.";
     break;
    case "Fri";
     echo"Today is Friday.Farty tonight.";
     break;
    case "Sat";
     echo"Today is Saturday.Its movie time.";
     break;
    case "Sun";
     echo"Today is Sunday. Do some rest.";
     break;
    default:
        echo "No information available.for that day.";
        break;

      


}
?>
