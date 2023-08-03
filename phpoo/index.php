<?php
//nome da classe
class Fruit{
    //nome dos atributos
    public
     $nome; //pubic significa que qualquer outra classe pode ter acesso a essa variavel
    public $cor;

    /*Métodos*/
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function set_name($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    //
    function get_name(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}
//$maca = new Fruit();//new cria um obj para a classe
$maca = new Fruit("maca_ifsp", "vermelha");
//$maca->set_("maca_ifsp", "vermelha");//setinha serve para acessar o método desse objeto
/*Atribuindo um nome para o meu objeto através do método set_name*/
//$maca->set_cor("cor = vermelha e verde");
//echo $maca->nome;
//o comando a baixp imprime se o atributo for public
/*o comando abaixo imprime se o atributo for public ou private*/
echo "<br>". $maca->get_name();
echo "<br>". $maca->get_cor();

?>
