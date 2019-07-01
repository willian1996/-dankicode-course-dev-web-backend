<?php

/*final*/ class Filha{
    protected function funcaoTeste(){
        echo "chamando função teste<br>";
    }
    
    public function mostrarOla(){
        echo "Olá mundo<br>";
        
    }
}

class Pai extends Filha{
    public function mostrarTchau(){
        echo "Tchau mundo<br>";
        $this->funcaoTeste();
    }
    public function motrarOla(){
        parent::mostrarOla();
        
        echo "nova função<br>";
    }
}

$pai = new Pai();
$pai->mostrarTchau();
$pai->mostrarOla();


$filha = new Filha();
