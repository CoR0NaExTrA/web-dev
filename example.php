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

$requestDateTime = date("Y-m-d H:i:s", 1703838399);
echo "Дата и время запроса: {$requestDateTime} <br>";