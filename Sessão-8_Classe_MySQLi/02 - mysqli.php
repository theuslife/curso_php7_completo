<?php

$conexao = new mysqli("localhost", "root", "","dbphp7");

if ($conexao->connect_error)
{
    echo "Error: " . $conexao->connect_error;
}

//Podemos informar e manipular o MySQL com os comandos SQL pelo método query() via classe mysqli do php 7. Isto faz nos trazer um resultado.
$resultado = $conexao->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Variável que pegará nossos itens do Select em transforma-los em JSON
$dados = array();

/*
    Precisamos então verificar se existe algum dado dentro da nossa variável resultado. O método fetch_assoc() 
    percorre linhas e verifica se há dados. Logo se tiver dados elas serão jogadas na variável linhas. O while então 
    traduz que enquanto o método fetch_assoc() conseguir atribuir valores na variável $linha ele continuará a rodar o loop.
*/
while($linhas = $resultado->fetch_assoc())
{
    array_push($dados, $linhas);
    var_dump($linhas);
}

//Exibição do JSON
echo "<hr>";
echo json_encode($dados);



?>