<?php
$x = 85;
$y = 35;
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
addition();
echo $z;
?>