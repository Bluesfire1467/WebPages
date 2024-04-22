<?php

$db = mysqli_connect("localhost", "root", "passDev", "appsalon");

if (!$db) {
    echo "Connect failed: %s\n". mysqli_connect_error();
    exit;
}