<?php
class Pai{
    //Atributos
    public $nome = 'Gabryel'; //O Public pode ser acessado por qualquer um sem problemas, tanto a classe Filha, quanto lado de fora
    protected $sobrenome = 'Santana'; //O Protected só pode ser acessado pela classe Filha(a classe com "extends")
    private $terceiroNome = 'Oliveira'; //A Privada é um atributo exclusivo da classe Pai, nem a classe Filha, nem o lado de fora acessam, apenas metodos dentro da própria classe podem
    
    //get e o set mágico te possibilita poupar código, não tendo que definir um set e um get para cada atributo por vez
    
    public function __set($atr, $value){
        $this-> $atr = $value;
    }

    public function __get($atr){
    return $this->$atr;
    }
    

    //Metodos do Pai
    protected function chamar(){
    echo "Vem cá";    
    }

    private function expulsar(){
    echo "Vai embora";
    }    

    public function funcAcao(){
    $x = rand(1, 10);

    if($x >= 1 && $x <= 5) {
     echo $this->chamar();
    }
    else {
        echo $this->expulsar();
    }
    }

    //Usando o get e o set normal, você consegue acessar os privados mesmo pelo filho, criando os metodos para adquirir a informação(set) e para armazena-lá(get)
    /*
      public function setSobrenome($value){
             $this->$sobrenome = $value;
        }     
    public function getSobrenome(){
            return $this-> sobrenome;
        }

    public function setTerceiroNome($value){
        $this->$terceiroNome = $value;
        }   

    public function getTerceiroNome(){
     return $this-> terceiroNome;
            */
}

class Filho extends Pai{
    
//Metedo para exibir os atributos e metodos que a classe possui
 public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    //O set e get mágico funciona estando no filho para pegar os atributos do Pai, menos o privado
    /*
    public function __set($atr, $value){
        $this-> $atr = $value;
    }

    public function __get($atr){
    return $this->$atr;
    }
*/
    //Polimorfismo = Ignora o fato de a função já existir na classe pai e cria a sua própria
    private function expulsar(){
    echo "Vai pra longe daqui!";
    }    

    public function x()
    {
        $this->expulsar();
    }

    //testando o get e set normal no filho-> Ele pega todos os atributos do Pai normalmente, menos o privado
    /*
    public function setSobrenome($value){
             $this->$sobrenome = $value;
        }     
    public function getSobrenome(){
            return $this-> sobrenome;
        }

    public function setTerceiroNome($value){
        $this->$terceiroNome = $value;
        }   

    public function getTerceiroNome(){
     return $this-> terceiroNome;
    }
*/

}

$filho = new Filho();// Instanciando o objeto(Transforma ele em uma variável, ou seja, ele passa a representar um objeto do mundo real)

//Executando com get e set mágico

echo $filho -> nome . ' ';
echo $filho -> sobrenome . ' ';
echo '<br>';
echo $filho -> x();


//Executando com get e set normal
/*
echo $filho -> nome . " "; //Não necessita da função por ser público
echo $filho -> getSobrenome() . " ";
echo $filho -> getTerceiroNome();
*/

?>