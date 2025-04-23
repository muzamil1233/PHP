<?php
if (isset($_POST['filename'])) {
    $fileName = "files/" . $_POST['filename'];
    $content = $_POST["content"]; // now it will work

    $file = fopen($fileName, "w") or die("Unable to create file");
    fwrite($file, $content);
    fclose($file);
    echo "File created successfully!";
}
?>

<form action="" method="post">
    <input type="text" placeholder="Enter file name" name="filename" />
    <br /><br />
    <textarea name="content"></textarea>
    <br /><br />
    <button type="submit">Create File</button>
</form>
