<?php

class Pessoa {

    //Público é livre para a própria classe, herdeiros e instâncias.
    public $nome = "Rasmus Lerdorf";

    //Protected só pode ser acessada por métodos dentro da própria classe ou classes filhas.
    protected $idade = 48;

    //Privado nem mesmo os herdeiros poderão acessar, somente a própria classe.
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

class Programador extends Pessoa {

    public function verDados(){
        //Mostra a classe atual que está rodando este método, já que a classe mãe também possue o mesmo método
        echo get_class($this) . "<br>"; //Programador
        echo $this->nome . "<br>"; //Rasmus Lerdorf
        echo $this->idade . "<br>"; // 48
    }
}

$objeto = new Programador();

//Funções públicas que possuem acesso aos itens protegidos e acessos podem ser executados normalmente em suas instâncias.
$objeto->verDados();


