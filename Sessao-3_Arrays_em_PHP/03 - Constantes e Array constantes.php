<?php

//Exemplo prático de constante é uma página na qual sabe que você é um usuário brasileiro, então você define a "variável" como uma constante PT-BR

//PHP 7 Possue Arrays constantes!

//Define irá criar uma constante. Primeiro parâmetro é o nome da cosntante, o segundo é o seu valor
define("SERVIDOR", "127.0.0.1");

//Não há necessidade do uso do $ nas constantes definidas por função
echo SERVIDOR;


echo "<br><br>";
// ===================== ARRAY CONSTANTE =======================

//Array constante
define("BANCO_DE_DADOS", [
    '127.0.0.1', 'root', 'password', 'teste'
]);
echo "<pre>";
print_r(BANCO_DE_DADOS);

echo "<br><br>";

//Constantes já padrões que podemos utilizar do PHP são bem úteis, acesse a documentação e veja muitos exemplos
echo PHP_VERSION;
echo "<br><br>";

