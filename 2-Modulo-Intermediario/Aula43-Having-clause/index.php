<?php
require_once 'config.php';

$sql = "SELECT * FROM clientes GROUP BY cargo HAVING pontos > 5";
$sql = $pdo->prepare($sql);
$sql->execute();

echo "<pre>";
print_r($sql->fetchAll());
echo "</pre>";
