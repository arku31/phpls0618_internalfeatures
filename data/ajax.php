<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$prepare = $pdo->prepare('SELECT * FROM users where id = :uslovie1');
$id = $_REQUEST['id'];
$prepare->execute(['uslovie1' => $id]);
$data = $prepare->fetch(PDO::FETCH_OBJ);
echo json_encode($data);