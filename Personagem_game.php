<?php
class Personagem {
    public $nome = null;
    public $velocidade = null;
    public $forca = null;
    public $resistencia = null;

    function resumirPersonagem() {
        return "$this->nome tem velocidade $this->velocidade, força $this->forca e resistência $this->resistencia.";
    }
    function modificarNome($nome) {
        $this->nome = $nome;
    }
    function modificarVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }
    function modificarForca($forca) {
        $this->forca = $forca;
    }
    function modificarResistencia($resistencia) {
        $this->resistencia = $resistencia;
    }
}

$func1 = new Personagem();
echo $func1->resumirPersonagem();   
echo "<br> <hr>";
$func1->modificarNome("Flash");
$func1->modificarVelocidade("Infinita");
$func1->modificarForca("Média");
$func1->modificarResistencia("Alta");
echo $func1->resumirPersonagem();

echo "<br> <hr>";


$func1->modificarNome("Superman");
$func1->modificarVelocidade("Da Luz");
$func1->modificarForca("Planetária");
$func1->modificarResistencia("Invulnerável");
echo $func1->resumirPersonagem();

echo "<br> <hr>";

$func1->modificarNome("Batman");
$func1->modificarVelocidade("Humana");
$func1->modificarForca("Sobre-humana");
$func1->modificarResistencia("Alta");
echo $func1->resumirPersonagem();

echo "<br> <hr>";

$func1->modificarNome("Goku");
$func1->modificarVelocidade("Infinita");    
$func1->modificarForca("Infinita");
$func1->modificarResistencia("Infinita");
echo $func1->resumirPersonagem();
?>