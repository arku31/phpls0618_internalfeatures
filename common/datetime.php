<?php
$unixTime = time();
//Можно по простому, математически
$oneDayAgo = $unixTime - (60 * 60 * 24); //вчера в это время

echo date('Y/m/d'); //выведет текущую дату в формате d.m.Y
echo PHP_EOL;
echo date('d.m.Y', $oneDayAgo).PHP_EOL; //выведет вчерашнюю дату и время
echo date('H:i:s', $oneDayAgo).PHP_EOL; //выведет вчерашнюю дату и время
echo date('Y-m-d H-i-s', $oneDayAgo).PHP_EOL; //выведет вчерашнюю дату и время
echo PHP_EOL;

$customdate = mktime(10, 10, 33, 10, 14, 2018);
echo $customdate;
$time = strtotime('28.02.2018');
echo PHP_EOL, date('d.m.Y', $time);