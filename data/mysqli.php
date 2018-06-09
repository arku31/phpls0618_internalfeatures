<?php

$mysqli = new mysqli("localhost", "root", "123", "basic");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}

$name = 'user'.rand(0, 1000);
$email = $name.'@mail.ru';
//1. Ничего не возвращает.
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$result = $mysqli->query($sql);
//2. Запрос который что-то возвращает.
$sql = "select * from users LIMIT 3";
$result = $mysqli->query($sql);

if ($result->num_rows) {
    $data=$result->fetch_all();
    echo "<pre>";
    print_r($data);
    die();
} else {
    echo "Был запрос без данных";
}