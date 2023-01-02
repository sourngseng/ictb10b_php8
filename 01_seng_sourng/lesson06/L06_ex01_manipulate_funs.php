<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating String in PHP</title>
</head>
<body>
    <h2>Using Manipulating String in PHP8</h2>
    <h4>Calculating the Length of a String</h4>
    <p>
        <?php 
            $my_str = 'Welcome to Tutorial Republic';
            // Outputs: 28
            echo strlen($my_str);
        ?>

    </p>

    <h4>Counting Number of Words in a String</h4>
    <p>
        <?php
            $my_str = 'The quick brown fox jumps over the lazy dog.';
            // Outputs: 9
            echo str_word_count($my_str);
        ?>
    </p>

    <h4>Replacing Text within Strings</h4>
    <p>
        <?php
            $my_str = 'If the facts do not fit the theory,
             change the facts.';
            // Display replaced string
            // echo str_replace("facts", "truth", $my_str);
            echo str_replace("facts", "truth", 'If the facts do not fit the theory, change the facts.');
        ?>
    </p>

    <p>
        <?php
            $my_str = 'If the facts do not fit the theory, change the
            facts.';
            // Perform string replacement
            str_replace("facts", "truth", $my_str, $ss);
            // Display number of replacements performed
            echo "The text was replaced $ss times.";
        ?>
    </p>
</body>
</html>