<?php

//Variável global
$nome = "Matheus";

function teste(){

    /* Para usar-la dentro do escopo local é necessário dizer
    que a variável $nome é global */
    global $nome;
    $sobrenome = " Rodrigues";
    echo $nome . $sobrenome;
}

teste();

/* Detalhe que uma variável SUPER GLOBAL funciona sem necessitar
   declarar o nome global dentro de um escopo local como no exemplo acima*/
