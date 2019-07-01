<?php
require_once 'config.php';

$sql = "SELECT * FROM clientes WHERE data BETWEEN '2019-04-01' AND '2019-04-04'";
$sql = $pdo->prepare($sql);
$sql->execute();

$emails = $sql->fetchAll();

var_dump($emails);