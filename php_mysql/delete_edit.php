<?php
include("./config.php");
$students = $conn->prepare("select * from students");
 $students->execute();
 $result =  $students->fetchAll();
echo "<table border = 1>";
foreach( $result as $student){
    echo "<tr>
    <td>".$student['name']. "</td>;
    <td>".$student['course']. "</td>;
    <td>".$student['batch']. "</td>;
    <td>".$student['city']. "</td>;
    <td>".$student['year']. "</td>;
    <td><form method = 'post'> 
    <button 
    name = delete
    value = ".$student['id']."
    
    > delete</button>
     </form></td>
     <td> <a href='populate.php ?id= ".$student['id']."'> edit </td>;
    </tr>";
}


echo "</table>";
if(isset($_POST['delete'])){
    $id =$_POST['delete'];
    $students = $conn->prepare("delete  from students  where id = '$id' ");
if( $students->execute()){
    echo"record delete";

}else{
    echo "record not deleted";
}
 
}


?>