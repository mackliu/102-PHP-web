<?php

echo $_FILES['book']['name'];
$filepath=$_FILES['book']['tmp_name'];
echo $filepath;
move_uploaded_file($filepath,"./".$_FILES['book']['name']);
?>