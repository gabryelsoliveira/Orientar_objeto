<?php
require_once "get_req.php";

    $y = new Funcionario();

    $y->setNome("Pedro");
    $y->setNumFilhos(0);
    $y->__set("cargo","Pedreiro");
    $y->__set("salario","999.999,00");
    echo "Teste funcionário Y: </br>";

    echo $y->getNome() ." possui ". $y->getNumFilhos() ." filho(s)";
    echo "</br>";

    echo "Seu cargo é ".$y->__get("cargo")." e recebe R$". $y->__get("salario")."<hr>";

    $x = new Funcionario();
    echo "Teste funcionário X: </br>";
    $x-> __set("nome","Peter");
    $x-> __set("telefone","(13) 9353243141");
    $x-> __set("numFilhos","5");
    $x-> __set("cargo","Super Heroi");
    $x-> __set("salario","0");

    echo "Funcionario X: </br>";
    echo $x-> __get("nome") . " possui " . $x -> __get("numFilhos") . " filhos</br>";
    echo "Telefone: " . $x-> __get("telefone") . ", seu cargo é " . $x->__get("cargo") . " e recebe R$" . $x->__get("salario");

    $m = new Funcionario();
    $m-> __set("nome","Henry");
    $m-> __set("sobrenome","Cavil");
    $m-> __set("musica","Metalica");
    $m-> __set("esporte","Futebol americano");
    echo "<hr>";
    echo "Teste funcionário M: </br>";
    echo $m-> __get("nome") . " " . $m-> __get("sobrenome") . " ama " . $m-> __get("musica") . " e joga " . $m-> __get("esporte");
?>