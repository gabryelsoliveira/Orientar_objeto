<?php
class Pessoa{

    public $nome = null;

    function __construct($nome){
        echo 'Objeto iniciado: <br/>';
        $this-> nome = $nome;
    }

    function __destruct(){
        echo '<br/> Objeto removido';
    }


    function __get($atributo){
        return $this-> $atributo;
    }

    function __set($atributo,$valor){
        $this-> $atributo = $valor;
    }

    function correr(){
        return '<br/>' . $this-> __get('nome') . ' esta correndo!';
    }
}

$pessoa = new Pessoa('Gabryel');
echo '<br/> Nome: ' . $pessoa-> __get('nome');
    
echo $pessoa-> correr();

$pessoa-> __set('nome','João');
echo '<br/><br/> Nome atualizado: ' . $pessoa-> __get('nome'); 
echo $pessoa-> correr();
echo "<br/>";
unset($pessoa); 
echo "<hr>";

$pessoa2 = new Pessoa('Daniel');
echo '<br/> Nome: ' . $pessoa2-> __get('nome');
    
echo $pessoa2-> correr();
unset($pessoa2); 
    

?>