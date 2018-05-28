<?php

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

/*
    Igual o inserimento de dados, mas aqui fazemos o comando SQL para atualizar. 
    Perceba que usamos os parâmetros em qualquer lugar do comando, assim fica fácil de
    ,utilizarmos nossas variáveis que irão no lugar destes parâmetros.
*/
$comando = $conexao->prepare("UPDATE tb_usuarios SET deslogin = :LOGINN, dessenha = :SENHA WHERE idusuario = :ID");

//Variáveis que irão no nossos parâmetros acima
$id = 8;
$login = "Vo";
$senha = "a1b2c3";

//bindParam significa ligar. Então informaremos os parâmetros ligados
$comando->bindParam(":LOGINN", $login);
$comando->bindParam(":SENHA", $senha);
$comando->bindParam(":ID", $id);

//Ao executar o comando será feito com sucesso e então adicionado os valores na tabela.
$comando->execute();
echo "Dados atualizados com sucesso!";

?>