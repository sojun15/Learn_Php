<?php
include './main/Database.php';

// $read = "select Name from student";

// $result = $conn->query($read);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo '<pre>';
//         print_r($row);
//     }
// } else {
//     echo 'failed to insert' . $conn->error;
// }
$read = "delete from student where id=15";
$conn->query($read);
