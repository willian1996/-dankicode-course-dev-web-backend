<?php
date_default_timezone_set("America/Sao_Paulo");
$pdo = new PDO("mysql:host=localhost;dbname=modulo8", "root", "");

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momentoRegistro = date("Y-m-d H:i:s");
    
    try{
        $sql = "INSERT INTO clientes (nome, sobrenome, momentoRegistro) VALUES (:nome, :sobrenome, :momentoRegistro)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":sobrenome", $sobrenome);
        $sql->bindValue(":momentoRegistro", $momentoRegistro);
        $sql->execute();
    echo "Cliente inserido com sucesso";
        
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="nome" required/>
        <input type="text" name="sobrenome" required/>
        
        <br>
        <input type="submit" name="acao" value="Enviar">
    
    
    </form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>



