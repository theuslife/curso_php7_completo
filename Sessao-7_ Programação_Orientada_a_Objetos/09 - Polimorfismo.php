<?php

abstract class Animal
{
    public function falar()
    {
        echo "Som";
    }
    public function mover()
    {
        echo "Andando";
    }
}

class Cachorro extends Animal 
{
    public function falar()
    {
        echo "Late";
    }
}

class Peixe extends Animal 
{
    public function falar()
    {
        echo "Emitindo um som...";
    }
    public function mover()
    {
        echo "Nadando...";
    }
}

class Passaro extends Animal 
{
    public function falar()
    {
        echo "Canta";
    }
    public function mover()
    {
        //Esta sintaxe ele pega um método da classe mãe (parente) e coloca dentro do nosso herdeiro para usarmos conforme nossas necessidades
        return "Voa e " . parent::mover();
    }
}

$carpado = new Peixe();
$pluto = new Cachorro();
$picapau = new Passaro();
$pluto->falar();
echo "<hr>";
$carpado->falar();
echo "<hr>";
$carpado->mover();
echo "<hr>";
$picapau->falar();
echo "<hr>";
echo $picapau->mover();

