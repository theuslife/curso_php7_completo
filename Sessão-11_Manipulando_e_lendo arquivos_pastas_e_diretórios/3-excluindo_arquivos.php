<?php

require_once("config.php");
$file = fopen("teste.txt", "w+");
fclose($file);

/* Exclui o arquivo. Utilizamos unlink() */
unlink("teste.txt");
echo "Arquivo removido com sucesso"; 

//Criei uma pasta nova
if(!is_dir("imagens_2"))
{
    mkdir("imagens-2");
}

//Excluindo os arquivos dentro desta pasta
foreach(scandir("imagens-2") as $elemento)
{
    if (!in_array($elemento, array(".", "..")))
    {
        unlink("imagens-2/" . $elemento);
    }
}

echo "ok!";




