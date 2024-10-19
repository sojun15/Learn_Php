<?php
include './main/Database.php';

$sql = "insert into student(Id,Name) values(15,'sojun')";

$conn->query($sql);

if ($conn) {
    echo 'insert successfully';
} else {
    echo 'failed to insert' . $conn->error;
}
