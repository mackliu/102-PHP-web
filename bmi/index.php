<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <h1>計算BMI(php)</h1>
    <?php
    if(!empty($_GET['bmi'])){
        echo "你上次計算的BMI值為:".$_GET['bmi'];
    }


    ?>
    <form action="bmi.php" method="get">
        <p>身高：<input type="text" name="height" id="height"></p>
        <p>體重：<input type="text" name="weight" id="weight"></p>
        <p><input type="submit" value="計算"></p>
    </form>
</body>
</html>