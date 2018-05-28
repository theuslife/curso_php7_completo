<?php

//=============Criando um diretório==================

/* is_dir é uma função que verifica se um diretório com
o parâmetro especifíco já existe. Neste caso estamos negando
pois se existir, iremos criar uma com a função dentro da 
condicional */
/*
if (!is_dir($nome)){
    //mkdir é a função que cria uma pasta automaticamente
    mkdir($nome);
    echo "Diretório $nome criado com sucesso";
    echo "<hr>";
} else
{
    echo "Já existe o diretório: $nome";
    echo "<hr>";
}
*/

//=============Excluindo um diretório==================
/*
//Aqui estamos excluindo o diretório com o rmdir();
if(is_dir($nome))
{
    rmdir($nome);
    echo "Diretório $nome foi excluído com sucesso!";
    echo "<hr>";
} else
{
    echo "Não existe diretório com este nome";
    echo "<hr>";
}
*/

//=============Escaneando um diretório==================
/*O retorno desta função scandir é um array. Ele irá retornar todos os arquivos existentes no diretório */
$images = scandir("imagens");
/*echo "<pre>";
print_r($images); */

/* Variável para armazenar nossos dados e informações
dos arquivos que estamos scanenado */
$dados = array();

//Fazemos um foreach para percorrer estes arquivos scaneados
foreach($images as $img)
{
    /*A função in_array retorna um valor true ou false. Ele busca no array os valores informados no segundo parâmetro. 
    Portanto se negarmos isto, estaremos removendo o ponto e dois pontos contidos no array do diretório. */
    if(!in_array($img, array(".", "..")))
    {
      /* Como estamos acessando através da pasta imagens, precisamos informar o diretório e o arquivo 
      em sí que estamos buscando */
      $filename = "images" . DIRECTORY_SEPARATOR . $img;
        
      /* A função pathinfo() retornará para nós informações do arquivo citado */
      $info = pathinfo($filename);

      /* Array push para colocar este array em nossa variável de array dados */
      array_push($dados, $info);

      /* Mostrando essas informações na tela: */
      echo json_encode($dados);
    }
}