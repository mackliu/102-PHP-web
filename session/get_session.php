<?php
session_start();
echo "帳號是:".$_SESSION['name'];

echo "<hr>";
echo "學生有:";
echo "<pre>";
print_r($_SESSION['students']);
echo "</pre>";

