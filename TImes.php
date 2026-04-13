<?php
abstract class Times{
public $titulosTotais;
public $nome;
public $anoFundacao;
public $cidade_Estado;
public $tecnico;
public $capitao;
public $titulosInternacionais;
public $titulosNacionais;
public $titulosEstaduais;


function __set($atributo, $valor){
    $this->$atributo = $valor;
}

function __get($atributo){
    return $this->$atributo;
}

function escrever(){

}

}

Class Selecoes extends Times {

}


Class Clubes extends Times{

}

Class Clubes_Amadores extends Times{
        
}


?>

    public $mascote;
    public $torcida;