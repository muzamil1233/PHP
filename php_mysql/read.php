<?php
include("./config.php");

$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<table border='1'>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['course'] . "</td>";
    echo "<td>" . $student['batch'] . "</td>";
    echo "<td>" . $student['city'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>



