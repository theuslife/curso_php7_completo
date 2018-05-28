<?php

//Concatenação
$nome = "Theus";
echo $nome . ".O programador<br>";
echo $nome;

//Operadores de somar, subtrair, dividir e multiplicar
$valorTotal = 0;
$valorTotal += 100;
$valorTotal -= 5;
$valorTotal *= 0.9;

//Módulo da divisão (Resto da divisão)
$valor = 10;
if($valor % 2 == 0){
    echo "<br>Variável é par :)<br>";
}
echo $valorTotal;
echo "<br>";

//True ou false
$a = 5;
$b = 5.0;

//Dois sinal de igual verifica se o valor é o mesmo
var_dump($a == $b);
echo "<br>";

//Três sinais de igual verifica se eles são identicos em todos sentidos
var_dump($a === $b);
echo "<br>";

//Spaceship é um recurso do PHP 7
$x = 35;
$k = 35;
/*Esse operador diz que se a primeira variável do parâmetro
  for maior ele retorna o valor 1, caso as duas sejam iguais
  é retornado o valor 0, caso a segunda variável seja maior 
  então é retornado o valor -1 */
var_dump($x <=> $k);
echo "<br>";


/*
Operador para verificar números nulos. Traduzindo estes dois simbolos de interrogação, eles perguntam se a 
variável é nula e se caso for ele irá verificar a próxima até achar uma variável não nula e neste caso irá 
imprimir na tela. Então teremos como resultado o número 10;
*/
$a = null;
$b = null;
$c = 10;
echo $a ?? $b ?? $c;





