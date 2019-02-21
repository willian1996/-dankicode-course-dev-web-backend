<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h5>Atividade 08</h5>
    <p>Efetue um algorítmo PHP que calcule e imprima o salário reajustado de um funcionário
        de acordo com a seguinte regra:
        • salários até 300, reajuste de 50%
        • salários maiores que 300, reajuste de 30%</p>
    <hr>
    
    <form method="post" action="">
        Salário<input type="number" step="0.01" name="salario"/>
        <input type="submit" value="Enviar"/>
    </form>
    
    <?php
    
    $salario = $_POST['salario'];
    
    if($salario <= 300){
        $salario = $salario + ($salario * 50 / 100);
    }else{
        $salario = $salario + ($salario * 30 / 100);
    }
    
    echo $salario
    
    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
