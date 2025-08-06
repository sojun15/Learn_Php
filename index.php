<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php file</title>
</head>

<body>
<?php
    $numbers = array(1, 2, 4, 6);
    echo "size of array: " . count($numbers) . "<br>";
    for($i= 0; $i < count($numbers); $i++) {
        echo "number: $numbers[$i]<br>";
    }
?>
</body>
</html>