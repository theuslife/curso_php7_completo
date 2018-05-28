<?php

/*
    O PHP reserva todas as funções com nomes iniciadas com __ como mágicas. É recomendado que não 
    se utilize funções com nomes com __ no PHP, a não ser que deseje-se alguma funcionalidade mágica 
    documentada.
*/
/*
    Métodos mágicos são metódos que são chamados automaticamentes ao fazer alguma ação com nossas instâncias.
    O construtor para definir alguns atributos, o destruct que fará algo quando limparmos uma variável ou o toString 
    que irá passar uma determinada informação caso queremos um echo do objeto.
 */

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    //Construtor no PHP é um exemplo de método mágico
    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    /*
        Temos também o método __destruct(). Você pode usar para desconectar do banco de dados, ou matar
        uma variável etc. Ele pode manipular o que acontecerá quando dermos um UNSET() em uma variável por exemplo
    */
    public function __destruct(){
        echo "Destruido com sucesso";
    }

    //Caso dê um echo no nossos objetos, o toString automaticamente é chamado
    public function __toString(){
        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade; 
    }
}


$meuEndereco = new Endereco("Rua labia", 100, "São Paulo - SP");
echo "<pre>";
print_r($meuEndereco);
echo "<hr>";
echo $meuEndereco;
echo "<hr>";
unset($meuEndereco);


