<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Atividade 03
    Efetue um algorítmo PHP que receba um valor digitado pelo usuário e verifique se esse
    valor é positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo",
    "Igual a Zero"</p>
    <form action="" method="post">
        valor:<input type="number" name="valor"/>
        <input type="submit" value="enviar"/>
    
    
    
    
    </form>
    <?php
    
    $valor = $_POST['valor'];
    
    if($valor > 0){
        echo $valor." é positivo";
    }elseif($valor == 0){
        echo $valor." é zero";
    }else{
        echo "Negativo";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>
