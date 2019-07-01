<?php
date_default_timezone_set("America/Sao_Paulo");
$pdo = new PDO("mysql:host=localhost;dbname=modulo8", "root", "");

$id = 4;

$sql = $pdo->prepare("DELETE FROM clientes WHERE id = ?");

if($sql->execute(array($id))){
    echo "Meu cliente foi deletado com sucesso";
}else{
    echo "Não foi atualizado";
}

