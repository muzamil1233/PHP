<?php
include("./config.php");
$getStudents = $conn->prepare("select id, name from students");
$getStudents ->execute();
$studentsData = $getStudents->fetchAll();

echo "<select>";

echo "<option> select Name </option>";
foreach($studentsData as $student){
    echo "<option value = ". $student['id'] ."> ". $student['name']. "</option>";
}

echo "</select>";




?>