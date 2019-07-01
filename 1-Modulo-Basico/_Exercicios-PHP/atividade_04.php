<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>Atividade 04
    Efetue um algorítmo PHP que receba os valores A, B, C e D. 
        
    Efetue a soma entre A e C,
        
        
    a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da
    multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a
    B+D".</p>
    
    <form action="" method="post">
        A: <input type="number" name="A"/><br>
        B: <input type="number" name="B"/><br/>
        C: <input type="number" name="C"/><br/>
        D: <input type="number" name="D"/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    <br/><br/>
    
    <?php 
    
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    
    
    $soma = $A + $C;
    $multiplicacao = $B * $D;
    
    if($soma > $multiplicacao){
        echo "A+C é maior que B*D";
    }elseif($soma == $multiplicacao){
        echo "A+C é igual a B*D";
    }else{
        echo "A+C é menor que B*D";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>
