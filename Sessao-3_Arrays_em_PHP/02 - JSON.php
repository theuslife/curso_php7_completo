<?php

/* 
JSON é usado em qualquer linguagem de programação, ele serve para integrar linguagens uma com as outras. 
Arrays de PHP com o do Java e ETC. Ele funciona muito bem exatamente com esta sessão de arrays 
*/

/* O JSON pega as variáveis e serializa, você consegue vê-las como arquivo de texto ou programas de visualização */

/* Você consegue converter um JSON para PHP e do PHP criar um JSON :) */

//Há um plugin para navegadores chamado JSONVIEW, ele é bem útil para a visualização dos conteúdos JSON

//Array bidimensional convertido em JSON
$pessoas = array();
array_push($pessoas, array(
    "nome" => "João",
    "idade" => 20,
    "sexo" => "Masculino "
));
array_push($pessoas, array(
    "nome" => "Matheus",
    "idade" => 19,
    "sexo" => "Masculino "
));
echo json_encode($pessoas);

echo "<br><br><br>";

//Convertendo JSON em PHP
$json = '[{"nome":"Jo\u00e3o","idade":20,"sexo":"Masculino "},{"nome":"Matheus","idade":19,"sexo":"Masculino "}]';

//Para jogar como array temos que passar o parâmetro true, pois se não ele passa o código como objeto no nosso sistema
$dadosJSON = json_decode($json, true);

print_r($dadosJSON);

