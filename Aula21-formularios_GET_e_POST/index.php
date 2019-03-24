<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
<?php
/*
if(isset($_GET['acao'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo $nome;
    echo "<br>";
    echo $email;
}
*/
/*
if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo $nome;
    echo "<br>";
    echo $email;
}
*/
/*
if(isset($_POST['acao'])){
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    
    echo $num1 + $num2;
}
*/
    
if(isset($_POST['acao'])){
    foreach($_POST['valor'] as $key => $valor){
        
        echo $key;
        echo "=";
        echo $valor;
        echo "<br>";
    }
}


?>
    
    <form method="POST">
        <select name="nome">
            <option value="willian">Willian</option>
            <option value="sales">Sales</option>
            <option value="gabriel">Gabriel</option>
        </select>
        
        
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        
        <input type="submit" name="acao" value="enviar"/>
    
    
    
    </form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
