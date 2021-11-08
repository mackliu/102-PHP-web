<?php

$acc='mack';
$pw='1234';

if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    setcookie('user',$_POST['acc'],time()+3600);
    //$_SESSION['user']=$_POST['acc'];
    header("location:mem_center.php");
}else{
    header("location:index.php?status=err");
}


?>