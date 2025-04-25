<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch= $_POST['batch'];
    $city =$_POST['city'];
    $year = $_POST['year'];

include("./config.php");

$user = $conn->prepare(
    "INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) 
     VALUES (NULL, '$name', ' $course', '$batch', '  $city', ' $year')"
);

$result = $user->execute();

if ($result) {
    echo "Data inserted";
} else {
    echo "Data is not inserted";
}
}
?>

<form action="" method = "post">
    <input type="text" placeholder = "enter your name " name = "name">
    <br />
    <br/>
    <input type="text" placeholder = "enter your course " name = "course">
    <br />
    <br/>
    <input type="text" placeholder = "enter your batch " name = "batch">
    <br />
    <br/>
    <input type="text" placeholder = "enter your city " name = "city">
    <br />
    <br/>
    <input type="text" placeholder = "enter your year " name = "year">
    <br />
    <br/>
    <button>add new students</button>



</form>
