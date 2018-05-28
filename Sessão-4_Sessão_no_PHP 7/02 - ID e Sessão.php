<?php

require_once "conf.php";
/* ID de sessão é uma indentificação da sua sessão única, você ganha um ID desta sessão, 
quando se abre a sessão anonima é um novo ID por exemplo. O servidor que gera estes ID */

//Serve para gerar informações e dados da sessão daquele ID e recuperar quando o usuário voltar para o site

//Acessando a ID. Se abrir uma aba anonima fica diferente este ID
echo session_id();

//Forçando a troca de ID. É uma boa prática de programação em logins utilizar a regeneração de ID para o usuário
session_regenerate_id();
echo "<br><br>";
echo session_id();
echo "<br><br>";
echo "<pre>";
var_dump($_SESSION);

