<?php
class Retangulo{
    public $altura;
    public $largura;

    function __construct($altura, $largura){
        $this->altura = $altura;
        $this->largura = $largura;
    }
    function set_largura($largura){
        $this->largura = $largura;
    }
    function set_altura($altura){
        $this->altura = $altura;
    }
    function get_largura(){
        return $this->largura;   
    }
    function get_altura(){
        return $this->altura;   
    }
    function calcular_area(){
        return ($this->altura* $this->largura);
    }
}
?>
