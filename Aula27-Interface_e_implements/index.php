<?php

require_once 'interface1.php';

class Teste implements Interface1{
    
    public function printOnScreen($par){
        echo $par;
    }
    
}

$teste = new Teste();

$teste->printOnScreen("Ola mundo!");

