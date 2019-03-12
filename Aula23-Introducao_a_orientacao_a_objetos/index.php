<?php

class Pessoa{
    private $nome = "Willian";
    private $idade = 23;
    private $peso = '73kg';
    
    
    public function crescer(){
        $this->comer();
        echo "estou crescendo";
    }
    private function comer(){
        echo "estou comendo";
    }
    
    
}

//Instanciar
$pessoa = new Pessoa();

$pessoa->crescer();
