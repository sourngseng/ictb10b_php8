<?php
Class greeting{
    public $str ="hello everyone";
    function show_greeting(){
        return $this->str;
    }
}
$message = new greeting;
var_dump($message);
?>