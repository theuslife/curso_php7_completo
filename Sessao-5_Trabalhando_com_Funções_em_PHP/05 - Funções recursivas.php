<?php

//Recursivo significado: que tem ou apresenta recursividade; que pode ser repetido.

/*
    Funções recursivas são funções que chamam elas mesmas. Somente em situações excepcionais você utiliza elas,
    caso contrário prefira utilizar laços for e while. Mas em códigos com muita repetição é bom utilizar estas funções 
    recursivas.
*/
//Neste exemplo temos uma hierarquia de cargos dentro de uma organização.
$hierarquia = array(
    array(
        'nome_cargo' => "CEO",
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => "Diretor Comercial",
                'subordinados' => array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => "Gerente de Vendas"
                    )
                    //Termino Gerente de Vendas
                )
            ),
            //Termino Diretor Comercial

            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => "Diretor Financeiro",
                'subordinados' => array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' =>'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de pagamentos
                        )
                            ),
                    //Termino: Gerente de contas a pagar

                     //Inicio: Gerente de Compras
                     array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos'
                            )
                            //Termino: Supervisor de suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Termino Diretor Financeiro
        )
    )
);

//Function que irá exibir nossa hieraquia de cargos
function exibe($cargos){

/*
    Fizemos uma variável chamada HTML, que vai receber a tag UL de lista desordenada e iremos manipular 
    todas as <li> pelo php. Perceba que estamos concatenando os elementos com o operador .= (ponto igual)
*/
$html = "<ul>";

foreach($cargos as $cargo){

    //Colocamos o CEO, que é o primeiro nome aqui no nosso indice 'nome_cargo'.
    $html .= "<li>";

    $html .= $cargo['nome_cargo'];

    /*
        Iremos verificar se o elemento subordinado existe e se tem algum item dentro dele com a função count(), 
        se tiver então fazemos o proseguimento da nossa condição
    */
    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

        //Aqui conseguiremos então fazer uma nova lista não ordenada com o elemento dentro da tag <li> com o elemento de forma hierárquica
        $html .= exibe($cargo['subordinados']);

    }

    $html .= "</li";

}

$html .= "</ul>";

return $html;

}

echo exibe($hierarquia);




