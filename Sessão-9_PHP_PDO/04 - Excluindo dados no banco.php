<?php

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$comando = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 9;

$comando->bindParam(":ID", $id);

$comando->execute();

echo "Dados deletados com sucesso!";

?>