<?php 
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

/*
Get irá fazer uma rota para nós. Portato entre as chaves
estará o nosso código PHP 
*/
$app->get("/", function(){
    echo "Home page, seja bem vindo!";
});

//Name é uma variável de rota
$app->get('/hello/:name', function ($name) {
    echo "Bem vindo, " . ucfirst($name);
});

$app->run();

?>