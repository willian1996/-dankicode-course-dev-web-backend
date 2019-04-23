<?php
require_once 'config.php';

$sql = "SELECT * FROM clientes";
$sql = $pdo->prepare($sql);
$sql->execute();

$usuario = $sql->fetchAll();

foreach($usuario as $value){
    echo $value['nome'];
    echo "<hr>";
}