<?php
$institution = "khulna university";

if (isset($institution)) {
    echo "value is set or found\n";
} else {
    echo "value is not set or found\n";
}

$location = null;

if (isset($location)) {
    echo "value is set or found\n";
} else {
    echo "value is not set or found\n";
}

if (empty($institution)) {
    echo "value is empty\n";
} else {
    echo "value is not empty\n";
}

if (empty($location)) {
    echo "value is empty\n";
} else {
    echo "value is not empty\n";
}
