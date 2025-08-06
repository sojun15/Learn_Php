<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $name = array(
        "sojun" => 15,
        "sourov" => 17
    );

    $key = array_keys($name);
    echo 'keys :<br>';
    print_r($key);

    $value = array_values($name);
    echo '<br><br>Values: <pre>';
    print_r($value);

    foreach ($name as $key => $value) {
        echo "Key: $key, Value: $value<br>";
    }
    ?>
</body>
</html>