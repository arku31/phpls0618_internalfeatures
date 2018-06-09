<?php
$digit = 7.44;
echo round($digit), PHP_EOL; //7
echo ceil($digit), PHP_EOL; //8
echo floor($digit), PHP_EOL; //7.99 => 7

$res = intdiv(33, 3);
echo $res;