<?php

//Classe sempre começa com letras maíusculas.

class Pessoa{

    //Atributos. Atributo fora do método se utiliza o cifrão
    public $nome;
    private $idade;
    private $sexo;

    //Metodos
    //$this faz referência ao objeto que irá instanciar nossa classe. Portanto o atributo referenciado não precisa do cifrão
    public function falar(){
        return "Meu nome é " . $this->nome;
    }
}

//Instanciado a classe para o nosso objeto $matheus, que é nossa variável
$matheus = new Pessoa();
$matheus->nome = "Matheus Rodrigues da Silva";
echo $matheus->falar();

