<?php

require_once "conf.php";
/* Na documentação do PHP, procura por sessões. Session reference. */

//Verifica a pasta que armazena seus dados de sessões na máquina
echo session_save_path();
echo "<br><br>";

//Verifica o status da sua sessão, o retorno é um número que pode ser tratado
var_dump(session_status());
echo "<br><br>";
switch(session_status()){
    case 0:
       echo "Sessão desabilitada";
    case 1:
       echo "Sessão não existe";
    case 2:
       echo "Sessão ativa!";
}

