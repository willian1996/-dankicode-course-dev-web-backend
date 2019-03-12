<?php



class Exemplo{
    private $var1;
    public $var2;
    
//    public static $var3 = "statico";
//    
//    
//    public function metodo(){
//        
//    }
//    private function metoto2(){
//        
//    }
//    public static function metodoEstatico(){
//        echo "metodo statico";
//    }
    public function setVar1($v1){
        $this->var1 = $v1;
    
    }
    public function getVar1(){
        return $this->var1;
    }
}