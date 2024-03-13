<?php
// 1. вывести все данные о сервере и заголовках
echo 'Данные в глоабльном массиве $_SERVER';
foreach ($_SERVER as $key => $header) {
  echo "{$key} = {$header} </br>";
}
echo '<br>---------------<br>';

// 2. вывести время запроса
$requestTime = $_SERVER['REQUEST_TIME'];
echo "Timestamp запроса {$requestTime} <br>";

$now = date("Y-m-d H:i:s");
echo "Текущая дата и время: {$now} <br>";

$requestDateTime = date("Y-m-d H:i:s", 2000000000);
echo "Дата и время запроса: {$requestDateTime} <br>";

$lastDay = date("H*i*s Y/m/d", 1717189199);
echo "Последний день учебы: {$lastDay} <br>";

$timestampNow = strtotime('now');
echo "Текущий timestamp: {$timestampNow} <br>";

$timestampDatetime = strtotime($now);
echo "Текущий timestamp: {$timestampDatetime} <br>";
    
$timestampNextWeek = strtotime('+1 week 2 days 4 hours 2 seconds');
echo "Какой-то timestamp на след неделе {$timestampNextWeek} <br>";

echo mktime(9, 24, 57, 5, 23, 1995) . '<br>';

echo '<br>---------------<br>';