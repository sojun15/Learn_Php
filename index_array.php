<?php
$numbers = array(1, 2, 4, 6);

array_push($numbers, 15, 31);
array_pop($numbers);
$reverse = array_reverse($numbers);

foreach ($numbers as $number) {
    echo "number:$number<br>";
}

echo "print reverse order:<br>";
foreach ($reverse as $number) {
    echo "number:$number<br>";
}

echo "length of numbers:" . count($numbers);
