<form action="" method = "post">
    <input type="text" name = "search" placeholder = "enter name for search">
    <br/>
    <br/>

    <button> search </button>
</form>

<?php
include("./config.php");
if(isset($_POST['search'])){
    $search=  $_POST['search'];
    $student = $conn->prepare("select * from students where name like  '%$search%' ");
    $student->execute();
    $result = $student->fetchAll();
    print_r($result);
}

?>