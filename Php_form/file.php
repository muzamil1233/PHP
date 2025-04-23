<?php

if($_FILES ['fileuploaded']){
  $path = $_FILES ['fileuploaded']['name'];
  $upload_path = "./uploads/".$path;
  move_uploaded_file($_FILES['fileuploaded']['tmp_name'], $upload_path )
  || die("failed to upload");

}

?>