
<?php
    // Open a file for reading
    $handle = fopen("note.txt", "r");
    var_dump($handle);
    echo "<br>";
    // Connect to MySQL database server with default setting
    $link = mysqli_connect("localhost", "root", "");
    var_dump($link);
?>