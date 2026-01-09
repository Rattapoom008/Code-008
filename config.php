<?php
$host = "localhost";
$user = "testapi";
$db   = "apidb";
$pass = "12345678";


$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
?>