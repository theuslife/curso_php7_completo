<?php


/* Variáveis que recebem informações via Get ou Post vem sempre
como strings, para transforma-las em outros tipos primitivos
no seu retorno devemos fazer a conversão. Como no exemplo
abaixo */
$nome = (int) $_GET['a'];
var_dump($nome);