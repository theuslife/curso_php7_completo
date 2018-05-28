<?php

/*
    A classe abstrata é semelhante a um método de interface, porém ela diz o que vai ser feito logo de cara. 
    Ela não pode ser instanciada na classe criada, somente nos herdeiros. 
*/

interface Veiculo 

{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

//Essa classe abstrata não pode ser instânciada
abstract class Automovel implements Veiculo 

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

class DelRey extends Automovel 
{
    public function empurrar()
    {
        echo "Empurrado";
    }
}

$carro = new DelRey();
$carro->acelerar(200);


