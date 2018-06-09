<?php
$len = mb_strlen('ПРИВЕТ');

$string = 'ф123';
$replace = str_replace('ф', 'фыв', $string);
//$result = preg_replace('|ПРИВЕТ|', "ПОКА", $len);
//         01234567
$strpos = 'original';
//1. Входит эта строка в другую строку
//2. Начинается ли данная строка со второй строки
$is_present = strpos($strpos, 'ig'); // 0 !== false

$str = '1.sdfsdfsdf Пункт sdfsdf fdgdfgdfg';

$checking = strpos($str, '1.');
//if ($checking === 0) {
//    echo "Этот пункт 1";
//}
////var_dump($checking);
//
////var_dump($is_present);
//
//if ($is_present == false) {
//    echo 'Слова нет';
//}


//echo chr(120);

$checking = strrev('ФАМЧЯ');
echo $checking;



//strtolower, strotoupper, strrev