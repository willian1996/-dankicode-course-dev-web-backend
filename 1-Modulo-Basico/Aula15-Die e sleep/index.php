<?php

//Durma o codigo por x segundos 
/*
sleep(3);

echo "um";

sleep(3);

echo "dois";

sleep(3);

echo "tres";
*/

$nome = "Joao";

if($nome == "Joao"){
    //continuamos o codigo;
    echo "tudo certo<br>";
}else{
    die("O script parou de ser executado");
}



sleep(3);

echo "um<hr>";

sleep(3);

echo "dois<hr>";

sleep(3);

echo "tres<hr>";