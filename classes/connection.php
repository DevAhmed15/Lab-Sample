<?php

$connect = mysql_connect("localhost", "root", "root");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("lab")) {
    echo "Unable to select user: " . mysql_error();
    exit;
}
?>