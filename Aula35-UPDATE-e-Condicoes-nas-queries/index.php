<?php
date_default_timezone_set("America/Sao_Paulo");
$pdo = new PDO("mysql:host=localhost;dbname=modulo8", "root", "");

$id = 3;

$sql = $pdo->prepare("UPDATE clientes SET nome='Vitor', sobrenome='Augusto' WHERE nome = 'Mario' OR nome = 'Willian'");

if($sql->execute()){
    echo "Meu cliente foi atualizado com sucesso";
}else{
    echo "Não foi atualizado";
}

