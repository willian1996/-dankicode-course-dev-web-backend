<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>Atividade 02
    Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o
    valor é maior ou igual a 10" caso isso seja verdade, senão imprima "o valor não é maior ou igual
    a 10"</p>
    
    <form action="" method="post">
        
        valor: <input type="number" name="valor"/>
        <input type="submit" value="enviar">
    
    
    
    
    </form>
    <?php
    
    $valor = $_POST['valor'];
    
    if($valor >= 10){
        echo "o valor é maior ou igual a 10";
    }else{
        echo "o valor não é maior ou igual a 10";
    }
    
    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>
