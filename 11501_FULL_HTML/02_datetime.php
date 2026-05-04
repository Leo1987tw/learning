<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間處理</title>
</head>
<body>
    
<h2>給定兩個日期，計算中間間隔天數</h2>

<ul>
    <li>起始日期: 2026-04-19</li>
    <li>結束日期: 2026-05-04</li>
</ul>

<?php

$start = "2026-04-19";

$end = "2026-05-04";

$start_time = strtotime($start);

$end_time = strtotime($end);

$difference = ($end_time - $start_time) / ( 24 * 60 * 60 );

echo "<br>";

echo "間格天數:" . $difference . "天";

?>

<h2>計算距離自己下一次生日還有幾天</h2>

<?php

$today = date("Y-m-d");

$birthday = "1987-03-03";

$this_birthday = date("Y") . date("-m-d", strtotime($birthday));

$this_birthday_time = strtotime($this_birthday);

$today_time = strtotime($today);

echo $today_time . "-" . $this_birthday_time;

if($today_time >= $this_birthday_time){
    $difference = (strtotime("+1 year", strtotime($this_birthday)) - $today_time) / ( 24 *60 * 60 );
} else{
    $difference = ($this_birthday_time - $today_time) / ( 24 *60 * 60 );
}

echo "<br>";

echo "間格天數:" . $difference . "天";

?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php

echo date("Y/m/d");
echo "<br>";
echo date("n月j日 l");
echo "<br>";
echo date("Y-m-d G:") . (int)date("i") . ":" . (int)date("s");
echo "<br>";
echo date("Y-m-d G:") . date("i") . ":" . date("s");
echo "<br>";
echo date("今天是西元Y年m月d日");
echo (date("N") <= 5 ? "上班日" : "假日");

?>

<h2>利用迴圈來計算連續五個周一的日期</h2>

<p>例:</p>

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php

$date = "2026-05-04";

for($i=1; $i<=5; $i++){
    $timestring = strtotime("+$i week", strtotime($date));
    echo date("Y-m-d 星期一", $timestring);
    echo "<br>";
}

?>

<br>
<br>
<br>
<br>
<br>
    
</body>
</html>