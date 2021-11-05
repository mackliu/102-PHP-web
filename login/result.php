<?php

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='mack' && $pw=='1234'){
    echo "帳號或密碼正確";
    echo "<br>";
    echo "登入成功";
}else{
    echo "帳號或密碼錯誤";
    echo "<br>";
    echo "登入失敗";

}



?>