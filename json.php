<?php
$user = ["name" => "muzamil" , "age" => 24, "email" => "muzamiln213@gmail.com"];
$userJson= json_encode($user);

echo  $userJson

$data = "{"name":"muzamil","age":24,"email":"muzamiln213@gmail.com"}";
$dataArray = json_decode($data,true);
print_r($dataArray)

?>