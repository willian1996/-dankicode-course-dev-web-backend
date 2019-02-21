<?php

//while
$x = 0;
while($x <= 10){
    echo $x. ". Olá mundo com while<br>";
    $x+=1;
}

echo "<hr>";

//for
for($contador = 10; $contador >= 0;$contador--){
    echo $contador.". Olá mundo com for <br>";
}

echo "<hr>";

//do while
$contador = 1;
do{
    echo $contador.". Olá mundo com do While <br>";
    $contador++;
}while($contador <= 10);

