<?php

//Biblioteca foi criada para conversar com outras API/Bibliotecas. API do pagseguro, google maps etc...

//Webservice - Serviços de API com seus sistemas etc.

//Este CEP pode ser um dado informado pelo usuário através
//de um formulário e assim manipulamos com este webservice
//utilizando a biblioteca Curl
$cep = "04953070";

//Link do webservice, onde o cep informado ali tratá informações que necessitamos
$link = "https://viacep.com.br/ws/$cep/json/";

//========Utilizando a biblioteca CURL=========

//Iniciando o curl, comando inicial para fazer a chamada do webservice
$curl = curl_init($link);

//===Dois comandos para que funcione o nosso Curl===

//Retorno da informação
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//Não fazer verificação e validação do SSL/https
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

//Disparando o acesso com o curl_exec
$resposta = curl_exec($curl);

//Close para parar a conexão
curl_close($curl);

//Pegando os dados do CEP, tendo retorno de array teremos
//chaves acessíveis para que possamos manipular da forma
//que quizermos. O segundo parâmetro true para retornar um array para nós
$dados = json_decode($resposta, true);
echo "<pre>";
print_r($dados);
echo "<hr>";
print_r("Bairro: " . $dados["bairro"]);
echo "</pre>";

?>