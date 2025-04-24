<?php
$host = "localhost";
$dbname = "college";
$username = "root";
$password = null;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection done";
} catch (PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}
echo "<br />";
$result = $conn->query("show tables");
while($row = $result->fetch(PDO :: FETCH_NUM)){
    print_r($row);
}
?>
