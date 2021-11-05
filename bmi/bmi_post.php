<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <?php
    $bmi=round($_POST['weight']/(($_POST['height']/100)*($_POST['height']/100)),2);
    echo "你的BMI值為:".$bmi;
    if($bmi>=18.5 && $bmi<24){
        echo "經判定為正常";
    }else{
        echo "經判定為異常";
    }
    ?>
    <a href="index.php?bmi=<?=$bmi;?>">回首頁</a>
</body>
</html>