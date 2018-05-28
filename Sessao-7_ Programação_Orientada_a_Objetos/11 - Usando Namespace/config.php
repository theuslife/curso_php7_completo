<?php

spl_autoload_register(function($nomeClasse)
{
    //Variável diretório da classe
    $dirClass = "classes";
    
    //Quando vermos este filename na documentação do PHP ou em outro lugar, ele se refere a todo o nome do arquivo inclusive a sua pasta. 

    //No windows a barra é para um lado, no linux é para outro. Portanto temos uma constante em PHP que se adapta ao sistema operacional que se chama DIRECTOY_SEPARATOR 
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

    if (file_exists($filename))
    {
        require_once($filename);
    }

});




