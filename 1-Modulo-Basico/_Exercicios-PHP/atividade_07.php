<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h5>Atividade 07</h5>
    <p>Efetue um algorítmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima
    o seu peso ideal, utilizando as seguintes fórmulas:

    • para homens: (72.7 * H) - 58
    • para mulheres: (62.1 * H) – 44.7</p>
    
    
    <form method="post" action="">
        Altura:<input type="number" step="0.01" name="altura"/>
        Sexo: 
        <select name="sexo">
            <option value="masculino">Homem</option>
            <option value="feminino">Mulher</option>
        </select>
        <input type="submit" value="enviar"/>
    
    
    
    </form>
    <hr>
    
    <?php
    
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    
    
    if($sexo == "masculino"){
        $pesoIdeal = (72.7 * $altura) - 58;
    }elseif($sexo == "feminino"){
        $pesoIdeal = (62.1 * $altura) - 44.7;
    }
    
    echo "O peso ideal é $pesoIdeal";
    
    
    

    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
