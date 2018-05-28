<?php
/*
    O bom é fazermos configurações assim em um arquivo onde já terá todas nossas configurações. 
    O tal do conf.php, pois no nossos códigos/código principal iremos deixar limpo e só fazendo a 
    requisão deste arquivo de configurações.
*/

/*
    Autoload facilita o uso das classes separadas, vamos criar uma função que irá incluir todas classes 
    necessárias automaticamente 
*/

//SPL são funções PHP para resolver lacunas. Vale a pena vê sobre elas na documentação

//Criamos a função normal para requirir o arquivo que necessitamos
function incluirClasses($nomeClasse)
{
    //Função file_exists verifica se o arquivo existe, logo se existir estamos requirindo ela.
    if(file_exists("autoLoad2/Classes/".$nomeClasse.".php") === true)
    {
        require_once("autoLoad2/Classes/".$nomeClasse.".php");
    }
}

//Usamos a função SPL passando como parâmetro em strings o nome da função que faz o requerimento de nosso arquivo 
spl_autoload_register("incluirClasses");

//Outra maneira de usar a função SPL é já fazer a função dentro do próprio parâmetro dela, como abaixo
spl_autoload_register(function($nomeClasse)
{
    if(file_exists("autoLoad2/Classes abstratas/".$nomeClasse.".php") === true)
    {
        require_once("autoLoad2/Classes abstratas/".$nomeClasse.".php");
    }
});

spl_autoload_register(function($nomeClasse){
    if(file_exists("autoLoad2/Interface/".$nomeClasse.".php") === true)
    {
        require_once("autoLoad2/Interface/".$nomeClasse.".php");
    }
});


$carro = new DelRey();
$carro->acelerar(100);




