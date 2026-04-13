<?php
class nome{

public $primeiroNome = "Gabryel";
protected $sobrenome = "Santana";
private $terceiroNome = "Oliveira";

        /*
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }
        */

        public function setSobrenome($value){
             $this->$sobrenome = $value;
        }     


        public function setTerceiroNome($value){
             $this->$terceiroNome = $value;
             }     

        public function getSobrenome(){
            return $this-> sobrenome;
        }

        public function getTerceiroNome(){
            return $this-> terceiroNome;
        }

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
}


$nome = new nome();
/*
echo $nome -> primeiroNome;
echo "<br>";
echo $nome -> sobrenome;
echo "<br>";
echo $nome -> terceiroNome;
*/

echo $nome -> primeiroNome . " ";
echo $nome -> getSobrenome() . " ";
echo $nome -> getTerceiroNome();


echo "<br>";
echo "<hr>";
echo $nome -> funcAcao()
?>