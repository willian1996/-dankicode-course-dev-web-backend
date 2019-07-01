<?php

abstract class teste{
    public function func1(){
        echo "chamando funcao";
    }
    abstract function func2();
}


class Principal extends teste{
    public function func2(){
        echo "Estoi=u declarando oficialmente um metoto abstrato";
    }
    public function funcao(){
        
    }
}

$principal = new Principal;
$principal->func1();

$principal->func2();