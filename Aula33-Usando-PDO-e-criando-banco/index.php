<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=modulo8", "root", "");
    echo "Conectado";
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
