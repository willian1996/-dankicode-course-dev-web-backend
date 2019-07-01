<?php
require_once 'config.php';

$sql = "SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'terror')";
$sql = $pdo->prepare($sql);
$sql->execute();


echo "<pre>";
print_r($sql->fetchAll());
echo "</pre>";


