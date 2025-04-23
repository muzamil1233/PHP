<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>call php function </title>
</head>
<body>
    <form action="" method = "post">
        <button name = "button" value = "btn1" >Call function </button>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['button'])){
    btn_clickTest();
}
function btn_clickTest(){
    echo"function called on button click";
}
?>
