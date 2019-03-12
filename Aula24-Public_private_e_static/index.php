<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    
    require_once 'Exemplo.class.php';
    
    $exemplo = new Exemplo();
    $exemplo->setVar1("Willian");
    echo $exemplo->getVar1();
    
    echo "<hr>";
    
    $exemplo2 = new Exemplo();
    $exemplo2->setVar1("Joao");
    echo $exemplo2->getVar1();
    
    
    
//    echo $exemplo->var1;
    
//    $exemplo2 = new Exemplo();
//    $exemplo2->var2 = "João";
//    echo $exemplo2->var2;
    
//    Exemplo::$var3 = "Outra Variavel";
//    echo Exemplo::$var3;
//    
//    Exemplo::metodoEstatico();
    
    
    
    
    ?>
</body>
</html>
