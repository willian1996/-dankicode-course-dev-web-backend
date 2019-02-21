<?php


function mostrarNome($nome, $idade){
    echo "nome é ".$nome." idade ".$idade;
}

//mostrarNome("Willian", 23);

function calculadora($numero1 = 10, $numero2 = 5){
    echo ($numero1+$numero2);
}

//calculadora(1);

function verdade(){
    return true;
}

function retornarString(){
    return "Willian";
}

echo retornarString();

$variavel = verdade();

