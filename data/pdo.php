<?php
$id = $_GET['id'];
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$stmt = $pdo->query("SELECT * FROM users where id = '$id'");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
die();