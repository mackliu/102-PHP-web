<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        .dayoff{
            background-color:pink;
        }
        .special-date{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <h1>線上月曆</h1>
    

<style>
.cell{
    width:50px;
    height:50px;
    border:1px solid #999;
    /* display:inline-block; */
    margin:0;
    box-sizing:border-box;
}

.calendar{
    width:352px;
    height:352px;
    margin:auto;
    border:1px solid red;
    box-sizing:border-box;
    display:flex;
    flex-wrap:wrap;
    align-content:start;
    justify-content:start;
}

</style>
<?php
    $specialDate=['2021-11-15'=>'發薪水','2021-12-25'=>'聖誕節'];
   //echo $specialDate['2011-11-11'];
/*     $firstDay=date("Y-m-01");
    $month=date("m"); */


    //直接訪問本頁不帶值
    //訪問本頁帶月份值
    /* empty(1)=>false
    !empty(1)=>!false=>true
    empty(0)=>true
    !empty(0)=!true=>false */

    if(isset($_GET['month'])){
        $month=$_GET['month'];
        $year=$_GET['year'];
    }else{
        $month=date("m");
        $year=date("Y");
    }
    
    $lastmonth=$month-1;
    $lastyear=$year;

    $nextmonth=$month+1;
    $nextyear=$year;
    
    if($month==1){
        $lastmonth=12;
        $lastyear=$year-1;

        $nextmonth=$month+1;
        $nextyear=$year;

    }else if($month==12){

        $lastmonth=$month-1;
        $lastyear=$year;

        $nextmonth=1;
        $nextyear=$year+1;
    }

    $firstDay=date("$year-$month-01");
    $firstWeekWhiteDays=date("w",strtotime($firstDay));
    $monthDays=date("t",strtotime($firstDay));
    $firstWeekDays=7-$firstWeekWhiteDays;
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7);
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7;
    $lastWeekWhiteDays=7-$lastWeekDays;
    $allCells=$weeks*7;
    //陣列中加入首列資料
    $headers=['周日','周一','周二','周三','周四','周五','周六'];

    //陣列中加入月前空白;
    for($i=0;$i<$firstWeekWhiteDays;$i++){
        $td[]="";
    }
    for($i=0;$i<$monthDays;$i++){ //決定當月有幾周
        $td[]=($i+1);
    }
   for($i=0;$i<$lastWeekWhiteDays;$i++){
        $td[]="";
    }

    ?>

<h3><?=$year;?>年<?=$month;?>月</h3>
 <div>
     <a href="index.php?year=<?=$lastyear;?>&month=<?=$lastmonth;?>">上一個月</a>
     <a href="index.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>">下一個月</a>
</div>   
<div class="calendar">
    
<?php


//月曆頭的地方
foreach($headers as $header){
    echo "<div class='cell'>";
    echo $header;
    echo "</div>";
}

//月曆body的地方
for($i=0;$i<$allCells;$i++){
    $w=$i%7;
    if(is_numeric($td[$i])){
        $date=date("$year-$month-").$td[$i];
    }

    if($w==0 || $w==6){
        echo "<div class='dayoff cell'>";
    }else{
        echo "<div class='cell'>";
    }
    echo $td[$i];
    if(isset($date) && array_key_exists($date,$specialDate)){
        echo $specialDate[$date];
    }
    echo "</div>";
}

?>
</div>
</body>
</html>