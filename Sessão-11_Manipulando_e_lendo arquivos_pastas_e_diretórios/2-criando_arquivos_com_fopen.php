<?php

require_once("config.php");

/*Dois parâmetros strings nesta função. O primeiro
é o diretório do arquivo, o segundo informando o que
você irá fazer com ele, como você quer controlar este
arquivo. Você deseja ler, alterar, inserir ou remover
informações? */

/*Dê uma olhada na documentação da função fopen, tem muita
coisa que podemos utilizar por lá */

//w+ = write e o sinal de mais é para criar o arquivo
$file = fopen("log.txt", "w+");

/*fwrite irá escrever algo no arquivo.
primeiro parâmetro é o fopen, segundo o que deseja inserir */
fwrite($file, date("Y-m-d H:i:s"));

/* Close é para fechar o arquivo assim que abri-lo */
fclose($file);
//echo "Arquivo e modificação feito com sucesso";

$sql = new Sql();
$result = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
echo json_encode($result);



