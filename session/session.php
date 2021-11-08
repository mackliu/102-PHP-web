<?php
session_start();


$_SESSION['name']='mack';

echo $_SESSION['name'];

$_SESSION['students']=['張大頭','王小明','陳美麗'];

?>