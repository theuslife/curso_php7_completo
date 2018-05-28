<?php

//Funções e Parâmetros

/*
Não fica obrigatório passar parâmetros na função quando falamos o valor padrão da variável, 
como neste caso da função abaixo. Neste caso é bom que os parâmetros obrigatórios fiquem a esquerda
*/
function ola($texto = "Mundo", $periodo= "Bom dia"){
    return "Olá $texto! $periodo<br>";
}

echo ola();
echo ola("Loli", "Boa tarde");
echo ola("Matheus", "Boa noite");

//Func_get_args é para pegar argumentos que o usuário for passando. Ele cria um array dos parâmetros passados
function ola2(){
    $argumentos = func_get_args();
    return $argumentos;
}
echo "<pre>";
print_r(ola2("Bom dia", "Senhor Matheus o seu café já está pronto na temperatura 40°Graus com sucesso."));
