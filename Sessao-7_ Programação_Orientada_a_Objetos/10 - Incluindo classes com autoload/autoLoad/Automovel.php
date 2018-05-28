<?php

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


