<?php
$data = ["Россия", "США", "Испания", "Австралия"];

$string = implode(';', $data);
echo $string;


$backToArray = explode(';', $string);

$data[] = "Новая страна";
array_push($data, 'Еще одна новая страна');

shuffle($data); //Перемешать все в массиве

$namedArray = [
    'name' => 'Игорь'
];

if (array_key_exists('name', $namedArray)) {
    echo "Ключ name существует!";
}
$func = function ($item)
{
    if (mb_strlen($item) == 3) {
        return "USA";
    } else {
        return $item;
    }
};
$result = array_map($func, $data);


$keys = array_keys($namedArray);

if (in_array('USA', $result)) {
    echo "США НАШЛОСЬ";
}

//array_keys, in_array