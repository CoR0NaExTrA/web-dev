<?php
// 1. вывести все данные о сервере и заголовках
echo 'Данные в глоабльном массиве $_SERVER';
foreach ($_SERVER as $key => $header) {
  echo "{$key} = {$header} </br>";
}
echo '<br>---------------<br>';
