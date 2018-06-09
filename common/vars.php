<?php
$string = "123.45";
$int = intval($string);
$float = floatval($string);
if (is_numeric($string)) {
//    echo "Это число!";
}
$var = [1];
if (!empty($var)) {
//    echo 'smth';
}
$asd = ['asd', 1, 'asdasdd'];
$serialized = serialize($asd);
$unserialized = unserialize($serialized);
print_r($unserialized);

//is_array, is_string, is_bool
//isset, empty
//settype

//serialize /unserialize

//unset