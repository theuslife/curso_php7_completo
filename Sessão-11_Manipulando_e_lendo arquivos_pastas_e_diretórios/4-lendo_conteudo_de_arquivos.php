<?php

require_once("config.php");

$filename = "usuarios.csv";
if(file_exists($filename))
{
    //R de read (leitura)
    $file = fopen($filename, "r");

    //fgets pega linha um por um no arquivo

    /*Neste exemplo pegamos somente nossas colunas.
    Estes mesmos nomes terão o mesmo valor nos índices 
    de nossos registros */
    $headers = explode(",", fgets($file));
    $dados = array();

    /*Enquanto a $linha receber linhas do fgets
    estaremos no loop */ 
     
    while ($linha = fgets($file))
    {
        /*percorre as outras linhas, explode torna 
        o conteúdo em array */
        $linhaDosDados = explode("," , $linha);
        $linha2 = array();
        

        for($i = 0; $i < count($linhaDosDados); $i++)
        {
            $linha2[$headers[$i]] = $linhaDosDados[$i];
        }
        array_push($dados, $linha2);
    } 
    fclose($file);
    echo json_encode($dados);
}






