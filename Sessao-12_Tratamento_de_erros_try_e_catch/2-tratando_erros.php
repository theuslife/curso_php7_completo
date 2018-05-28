<?php 

//Outra maneira de tratar erros: 
/*
//Função que iremos usar no lugar do erro
function manipulaErro($code, $message, $file, $line)
{
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));
}

//Função que irá modificar a mensagem de erro. No parâmetro
//passamos o nome da função dentro de um string
set_error_handler("manipulaErro");

//Gerando um erro com uma divisão por zero
echo 100/0; */

//Fazendo não parecer um erro na tela, mesmo havendo um waning
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
echo $nome;



?>