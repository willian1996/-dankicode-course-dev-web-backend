<?php

//FACTERY DESIGN PATTERN 
/*
class Cachorro{
    public function __construct(){
        echo "classe cahorro";
    }
    
}

class Gato{
    public function __construct(){
        echo "classe Gato";
    }
    
}

class Animal{
    public static function build($nomeClasse){
        if(class_exists($nomeClasse)){
            return new $nomeClasse;
        }else{
            die('A classe não existe');
        }
        
    }
    
}

Animal::build('peixe');
*/


//ADICIONAR/ FECHAR CARRINHO - CARRINHO
//CALCULAR FRETE - FRETE
//FECHAR PEDIDO - PEDIDO 

class Carrinho{
    public function fecharCarrinho(){
        echo "Carrinho fechado";
    }
}
class Frete{
    public function calcularFrete(){
        
    }
}
class Pedido{
    public function fecharPedido(){
        
    }
}

class Loja{
    public function finalizarCompra(){
        $this->fecharCarrinho();
        //$this->calcularFrete();
        //$this->fecharPedido();
        
    }
    public function fecharCarrinho(){
        $carrinho = new Carrinho();
        $carrinho->fecharCarrinho();
    }
}

$loja = new Loja();
$loja->finalizarCompra();















