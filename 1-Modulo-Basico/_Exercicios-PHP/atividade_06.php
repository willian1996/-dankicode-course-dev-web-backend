<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h5>Atividade 06</h5>
    <p>
    Efetue um algorítmo PHP que receba quatro notas de um aluno, calcule e imprima a
    média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a
    mensagem de reprovado para média inferior a 7.0</p>
    
    <form method="post" action="">
        nota1:<input type="number" name="nota1"/>
        nota2:<input type="number" name="nota2"/>
        nota3:<input type="number" name="nota3"/>
        nota4:<input type="number" name="nota4"/>
        <input type="submit" value="enviar"/>
    </form>
    
    <?php
    //recebendo dados do formulario
    
    
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    
    //calculando a media aritimética 
    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    
    
    //verificando se esta aprovado ou reprovado
    if($media >= 7){
        echo "Aprovado com a media: $media";
    }else{
        echo "Reprovado com a media: $media";
    }
    
    
    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
