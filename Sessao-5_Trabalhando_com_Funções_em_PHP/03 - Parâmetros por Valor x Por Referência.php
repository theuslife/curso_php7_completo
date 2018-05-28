<?php


//Por valor
$valor = 10;
function trocaValor($valor){
    $valor = 50;
    return $valor;
}
echo $valor;
echo "<br>";
echo trocaValor($valor);
echo "<br>";
echo $valor;

//Por refêrencia muda o valor de ambos é só colocar um E-comercial na frente.
$valor2 = 10;
function trocaValor2(&$valor2){
    $valor2 = 50;
    return $valor2;
}
echo "<br>";
echo $valor2;
echo "<br>";
echo trocaValor2($valor2);
echo "<br>";
echo $valor2;
echo "<br>";


