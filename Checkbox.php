<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Checkbox.php" method="post">
        <label for="subject">Select your interested subject:</label><br>
        <input type="checkbox" value="Math" name="subject[]">Math <br>
        <input type="checkbox" value="physics" name="subject[]">Physics <br>
        <input type="checkbox" value="ict" name="subject[]">Ict <br>
        <button name="conform" value="conform">confirm</button>
    </form>
<?php
    if (isset($_POST['conform'])) {
        if ($_POST['subject'] == null) {
            echo 'null';
        }
        $subjects = $_POST['subject'];
        if (empty($subjects)) {
            echo 'please';
        } else {
            foreach ($subjects as $subject) {
                echo $subject;
            }
        }
    }
    // echo "<pre>";
    // print_r($_POST);
?>
</body>
</html>
