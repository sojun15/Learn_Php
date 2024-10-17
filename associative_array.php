<?php

$name = array(
    "sojun" => 15,
    "sourov" => 17
);

$key = array_keys($name);
echo 'keys :<pre>';
print_r($key);

$value = array_values($name);
echo 'Values: <pre>';
print_r($value);

?>
<?php
foreach ($name as $key => $value) {
?>
    <p><?php echo $key; ?> : <?php echo $value ?></p>
<?php } ?>