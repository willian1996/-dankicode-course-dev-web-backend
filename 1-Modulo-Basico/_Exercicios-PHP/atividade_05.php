<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h5>Atividade 05</h5>
    <p>
    
    Efetue um algorítmo PHP que receba os valores A, B e imprima-os em ordem crescente
    em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
    </p>
    
    <form action="" method="post">
        A<input type="number" name="A"/>
        B<input type="number" name="B"/>
        <input type="submit" value="Enviar"/>
    </form>
    
    <?php
    
    $A = $_POST['A'];
    $B = $_POST['B'];
    
    if($A > $B){
        echo "$B, $A";
    }else{
        echo "$A, $B";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>
