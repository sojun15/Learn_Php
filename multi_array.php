<?php

$students = array(
    array("name" => "sojun", "id" => 15),
    array("name" => "sourov", "id" => 17),
    array("name" => "mojammel", "id" => 31),
    array("name" => "sohan", "id" => 37),
);

foreach ($students as $keys => $values) {
    foreach ($values as $key => $value) {
        echo "<b> $key </b> =>  $value, ";
    }
    echo "<br>";
}
