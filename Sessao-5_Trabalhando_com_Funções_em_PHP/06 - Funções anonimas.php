<?php

/*
    Isto aqui acontece bastante em Javascript. Por exemplo, temos uma variável e ela recebe uma função 
    na qual não possue nome, por isto de funções anônimas. Basta apenas a sua própria execução dentro da 
    variável e não há return, ou seja, um procedimento.
*/

/*
    Callback é quando um processo ocorre dentro da sua página e por vezes é um processo que requer um tempo, 
    então podemos ter uma função que retorna um E-mail ou avisa o usuário quando o processo acabar.
*/

//Vai passar uma função como parâmetro é função anônima.
function teste($callback){

    //Processo lento
    $callback();
}
teste(function(){
    echo "Terminou!";
});
echo "<hr>";

//Outro exemplo de funções anônimas. Vai passar uma função para uma variável, função anônima.
$fn = function($a){
    var_dump($a);
};

$fn("oi");



