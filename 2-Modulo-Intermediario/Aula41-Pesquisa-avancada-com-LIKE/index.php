<?php
require_once 'config.php';

$sql = "SELECT * FROM clientes WHERE email LIKE '%w%'";
$sql = $pdo->prepare($sql);
$sql->execute();

$emails = $sql->fetchAll();

var_dump($emails);