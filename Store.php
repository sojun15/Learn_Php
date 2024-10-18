<?php

if (isset($_GET['submit'])) {
    echo 'UserName: ' . $_GET['name'] . '<br>';
    echo 'Password: ' . $_GET['password'] . '<br>';
}

if (isset($_POST['submit'])) {
    echo 'UserName: ' . $_POST['name'] . '<br>';
    echo 'Password: ' . $_POST['password'] . '<br>';
}
