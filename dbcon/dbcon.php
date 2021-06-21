<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'benartdatabase';


$dbCon = mysqli_connect($host, $username, $password, $database);


if (!$dbCon) {
die('Connection failed: ' . mysqli_connect_error());
} ?>