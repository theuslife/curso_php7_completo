<?php

//Include inclue arquivos, e tenta rodar o programa mesmo
//que o arquivo chamado não esteja funcionando corretamente.
//ele também faz chamada de arquivos externos de sites, o que
//acaba não sendo uma boa prática de programação por questões
//de segurança

require_once "6 - Require e Include.php";
include_once "6 - Require e Include.php";


$resultado = soma(10, 20);
echo $resultado;


