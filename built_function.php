<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sentence = "The quick brown fox jumps over the lazy dog.";

    // all of those functions work on strings and return a new string but the original string remains unchanged
    echo "<b> Total number of characters: </b>" . strlen($sentence) . "<br>";
    echo "<b> Total number of words: </b>" . str_word_count($sentence) . "<br>";
    echo "<b> Find a specific word: </b>". strpos($sentence, "fox") . "<br>";
    echo "<b> Replace a specific word(fox to cat): </b>" . str_replace("fox", "cat", $sentence) . "<br>";
    echo "<b> Reverse the sentence: </b>" . strrev($sentence) . "<br>";
    echo "<b> Convert to uppercase: </b>" . strtoupper($sentence) . "<br>";
    echo "<b> Convert to lowercase: </b>" . strtolower($sentence) . "<br>";
    echo "<b> Slice an string: </b>" . substr($sentence, 4, 15) . "<br>";

    // those functions work on numbers and return a boolean value
    echo "<b> Check a number is int or not: </b>" . is_int(10) ? "Yes <br>" : "No";
    echo "<b> Check a number is float or not: </b>" . is_float(10.5) ? "Yes <br>" : "No";
    echo "<b> Check a number is numeric or not: </b>" . is_numeric("10") ? "Yes <br>" : "No";
    echo "<b> Check a variable is string or not: </b>" . is_string($sentence) ? "Yes <br>" : "No";
    echo "<b> Check a variable is array or not: </b>" . is_array(array(1, 2, 3)) ? "Yes <br>" : "No";
    ?>
</body>
</html>