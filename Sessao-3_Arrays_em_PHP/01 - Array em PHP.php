<?php

//Array vetor
$frutas = array("Maça", "Melancia", "Laranja");
foreach($frutas as $fruta){
    echo $fruta . " ";
}
echo "<br>";

//Array bidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";

//Função END do array lhe da a última informação do array
echo end($carros[1]);
echo "<br>";

//Array vazio que pode ser preenchido
$pessoas = array();

//Array_push adiciona elementos no final do array. Aqui criamos mais um outro array dentro do array que já tinhamos.
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

print_r($pessoas[1]);
