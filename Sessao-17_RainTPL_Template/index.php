<?php

// include
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// Configurações, onde informamos a pasta de layout e a pasta de cache
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
);

Tpl::configure( $config );

// Criando o objeto template
$tpl = new Tpl;

// assign a variable
/* 
Aqui estamos criando variáveis para serem usadas no nosso template 
Primeiro parâmetro: o nome da variável. Segundo parâmetro: seu conteúdo 
*/
$tpl->assign( "nome", "Matheus Rodrigues" );
$tpl->assign( "versao", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

/*
Draw = desenhar. Tendo tudo isto formado é desenhado o template e mostre 
o resultado. A última linha tem que ser este draw. 
*/
$tpl->draw( "index" );

?>
