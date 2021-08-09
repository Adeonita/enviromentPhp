<?php

$mysqli = new mysqli("php_database_1", "root", "example");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "successfully connected";

$mysqli->close();
?>