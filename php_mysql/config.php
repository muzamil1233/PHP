<?php
$host = "localhost";
$dbname = "college";
$username = "root";
$password = null ;

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>