<?php

//Criando um objeto da classe DateTime
$data = new DateTime();

//Método format é igual a função date() em questão de funcionalidade
echo $data->format("d/m/Y");
echo "<hr>";

//Esta classe guarda um intervalo de tempo. P maiusculo e a quantidade de dias em seguida finalizando com a letra D
$periodo = new DateInterval("P15D");

//Método add serve para adicionar uma data. Logo estamos informando para nosso método (Some 15 dias)
$data->add($periodo);
echo $data->format("d/m/Y");
echo "<br>";






