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
    <h1>使用cookie登入並記錄登入狀態</h1>
    <div>
        <?php
            if(isset($_GET['status']) && $_GET['status']=='err'){
                echo "<span style='color:red'>帳號或密碼錯誤</span>";
            }
        ?>
        <form action="check_login.php" method='post'>
            <p>帳號: <input type="text" name="acc" ></p>
            <p>密碼: <input type="password" name="pw"></p>
            <p><input type="submit" value="登入"><input type="reset" value="取消"></p>
        </form>
    </div>
</body>
</html>