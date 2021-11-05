<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
    <style>
        div{
            width:400px;
            margin:auto;
            border:1px solid black;
            box-shadow: 1px 1px 10px #999;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1>PHP傳給自己</h1>
    <div>
        <form action="index.php" method='post'>
        <?php
    //print_r($_POST);
    if(!empty($_POST)){
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
    }
        ?>

            <p>帳號: <input type="text" name="acc" ></p>
            <p>密碼: <input type="password" name="pw"></p>
            <p><input type="submit" value="登入"><input type="reset" value="取消"></p>
        </form>
    </div>
</body>
</html>