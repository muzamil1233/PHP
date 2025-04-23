<form action="" method = "post">

<input type="text" name ="user " placeholder = "enter user name " >
<br />
<br/>

<button name = "button" value = "set " > Set Cookie </button>
<button name = "button" value = "display " > Set display  </button>
<button name = "button" value = "delete  " > delete cookie  </button>
</form>
<?php
if(isset($_POST['button'])){
    if($_POST["button"] == "set"){
        $val = $_POST["user"];
     setcookie("user" , $val);
     echo "cookie is set";
    }
}

 ?>