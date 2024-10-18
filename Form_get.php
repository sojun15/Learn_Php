<?php

// if (isset($_GET['submit'])) {
//     echo 'UserName: ' . $_GET['name'] . '<br>';
//     echo 'Password: ' . $_GET['password'] . '<br>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Store.php" method="get">
        <section class="username">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </section>

        <section class="pass-word">
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </section>
        <section class="btn">
            <button name="submit">Login</button>
        </section>
    </form>
</body>

</html>