<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getMotor():float {
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor; 
    }
    //Você pode definir o tipo de dado que ele retorne. Colocando na frente dos parentêses o tipo primitivo
    public function getAno():int {
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

echo "<pre>";
var_dump($gol->exibir());



