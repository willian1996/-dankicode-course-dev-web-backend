<?php
require_once 'config.php';


/*
$sql = $pdo->prepare("SELECT * FROM clientes ORDER BY nome ASC LIMIT 3");
$sql->execute();
$clientes = $sql->fetchAll();
foreach($clientes as $key =>$value){
    echo $value['nome'];
    echo "<hr>";
}
*/

$sql = $pdo->prepare("SELECT * FROM clientes LEFT JOIN cargos ON clientes.cargo = cargos.id");
$sql->execute();
$clientes = $sql->fetchAll();
foreach($clientes as $key =>$value){
    echo $value['nome'];
    echo " - ";
    echo $value['nome_cargo'];
    echo "<hr>";
}

