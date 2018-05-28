<?php


//Aspas duplas e aspas simples
$nome = "Matheus";
$nome2 = 'Rodrigues';
$nome3 = "matheus rodrigues da silva";

/*
As aspas duplas permite você utilizar variáveis dentro dela,
assim lhe mostrando o valor da variável. Enquanto aspas simples mostra apenas textos.
*/
echo "Olá $nome";
echo "<br>";

//Função para deixar strings em maiúscula
echo strtoupper($nome);
echo "<br>";

//Função para Minúsculas
echo strtolower($nome);
echo "<br>";

//Primeira letra de cada frase maiúscula
echo ucwords($nome3);
echo "<br>";

//Apenas a primeira letra maíscula
echo ucfirst($nome3);
echo "<br>";

/*
Trocando a letra de uma variável string. Ele pegará a letra informada, trocará ela pelo segundo parâmetro
e isto na variável citada no terceiro parâmetro
*/
$empresa = "Google";
echo str_replace("o", "k", $empresa);
echo "<br>";

//Buscando uma palavra
$frase = "A repetição é a mãe da retenção";
$busca = strpos($frase, "mãe");
var_dump($busca);
echo "<br>";

//Buscando somente parte da frase até outra parte da frase e não pega-la inteira 
$texto = substr($frase, 0, $busca);

//Conta a quantidade de strings a função strlen()
$contagemFrase = strlen($frase);
var_dump($contagemFrase);
echo "<br>";



