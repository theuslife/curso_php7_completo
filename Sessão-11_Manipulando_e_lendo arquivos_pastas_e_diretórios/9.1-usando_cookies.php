<?php

if(isset($_COOKIE["NOME_DO_COOKIE"]))
{
    $objeto = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $objeto->empresa;
}

?>