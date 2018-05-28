<?php 


$email = $_POST["email"];

//Início do curl
$curl = curl_init();

//
curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

//Recuperando as informações
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6Le_jFsUAAAAAHWUNCLFx7BXLdoaF9PaWtSGTjKA",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"] //pegando IP do usuário
)));

//Retorno dos dados
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//Executando o curl e jogando seus dados para a variável recaptcha
$recaptcha = json_decode(curl_exec($curl), true);

//Encerrando o curl
curl_close($curl);

/*
O array dessa variável $recaptcha terá uma chave chamada "sucess" na qual armazena um valor true ou false do recaptcha,
portanto é ele que tratamos neste envio de formulário
*/

if($recaptcha["success"] === true)
{
    echo "<pre>";
    echo "OK: " .$_POST["email"];
    echo "</pre>";
} else
{
    header("Location: 4-usando_reCaptcha_para_impedir_robos.php");
}


?>


