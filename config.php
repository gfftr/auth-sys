<?php
// host
$host = "localhost";
$dbname = "auth_sys";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

// test connection
    if ($conn == true) {
 //
} else {
 echo "connection has failed";
}