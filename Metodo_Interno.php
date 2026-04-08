<?php
class Times{

public $nome;
public $titulos;

function __set($atributo, $valor){
    $this->$atributo = $valor;
}

function __get($atributo){
    return $this->$atributo;
}

function escrever(){
    return "{$this->__get('nome')} possui {$this->__get('titulos')} títulos mundiais. <br> <hr>";
}
}

$santos = new Times;
$saopaulo = new Times;
$corithians = new Times;
$palmeiras = new Times;

$santos->__set('nome','Santos');
$santos->__set('titulos','2');

$saopaulo->__set('nome','São Paulo');
$saopaulo->__set('titulos','3');

$corithians->__set('nome','Corinthians');
$corithians->__set('titulos','1');

$palmeiras->__set('nome','Palmeiras');
$palmeiras->__set('titulos','0');


echo $santos->escrever();
echo $saopaulo->escrever();
echo $corithians->escrever();
echo $palmeiras->escrever();

?>