<?php       
class Funcionario { 

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s).";
    }    
    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
    function modificarNome($nome) {
        $this->nome = $nome;
    }
}

$func1 = new Funcionario();
echo $func1->resumirCadFunc(); 

echo "<br>";

$func1->modificarNome("Maria"); 
$func1->modificarNumFilhos(3);
echo $func1->resumirCadFunc();

echo "<br>";

$func1->modificarNome("João"); 
$func1->modificarNumFilhos(2);
echo $func1->resumirCadFunc();


?>