<?php

//Autoload facilita o uso das classes separadas, vamos criar uma função que irá incluir todas classes necessárias automaticamente

//Classes na mesma pasta temos este exemplo
function __autoLoad($nomeClass)
{
    require_once("autoLoad/$nomeClass.php");

}
$carro = new DelRey();
$carro->acelerar(100);




