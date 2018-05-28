<?php

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//Diferente da classe MySQLi, aqui os parâmetros damos um nome especifíco. Colocamos dois pontos em seguída o nome desejado.
$comando = $conexao->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGINN, :SENHA)");

//Variáveis que irão no nossos parâmetros acima
$login = "Jose";
$senha = "123456789";

//bindParam significa ligar. Então informaremos os parâmetros ligados
$comando->bindParam(":LOGINN", $login);
$comando->bindParam(":SENHA", $senha);

//Ao executar o comando será feito com sucesso e então adicionado os valores na tabela.
$comando->execute();

echo "Dados inseridos com sucesso!";

?>