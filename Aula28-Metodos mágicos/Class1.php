<?php

class Class1{
    private $nome;
    private $idade;
    
    
    public function __construct($nome, $idade){
        $this->setNome($nome);
        $this->setIdade($idade);
        
        
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    
}