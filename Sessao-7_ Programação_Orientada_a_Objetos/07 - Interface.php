<?php

//Interface lhe diz quais são os atributos e métodos necessários no seu projeto para que você codifique eles. 

/*
    Um contrato de API por exemplo lhe diz que para usar aquela aplicação você necessita da interface fornecida por 
    eles e assim fazer os métodos, parâmetros tudo certinho conforme a interface passada.
*/

//Uma classe pode implementar mais de uma interface se quiser

//O PHP lhe obriga a declarar tudo que tem nas interfaces, da forma que foi declarada lá.

interface Veiculo 
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo 
{
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até " . $velocidade . " km/h";
    }

    public function freiar($velocidade)
    {
        echo "O veiculo freiou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();
$carro->trocarMarcha(1);
echo "<hr>";
$carro->acelerar(50);
echo "<hr>";
$carro->freiar(20);




