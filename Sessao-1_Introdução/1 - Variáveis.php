<?php


//-----------------Somando variável string com variável inteira-----------------
$nome = "10";
$sobrenome = 5;
echo $nome + $sobrenome;
echo "<br>";


//-----------------Tipos básicos-----------------
$site = "matheusrodrigues.com.br";
$ano = 1992;
$salario = 55.99;
$bloqueado = false;

//-----------------Tipo arrays-----------------
$frutas = array("Abacaxi", "Laranja", "Manga");
print_r($frutas);
echo "<br>";

//-----------------Tipo objetos-----------------
$nascimento = new DateTime();
print_r($nascimento);
echo "<br>"; 

//-----------------Tipos especiais-----------------
$arquivo = fopen("variaveis.php", "r");
var_dump($arquivo);

//Nulo é sem nada, absolutamente nada
$nulo = null;

/* Vazia é uma variável que foi iniciada, mas apenas
Não possue nada */
$vazio = "";

