<?php 

$pasta = "arquivos";
$permissao = "0775";

if(is_dir($pasta))
{
    /*
    O segundo parâmetro do mkdir é opcional, ele trata o nível de 
    permissão da pasta.
    Permissão nível 0 = Permissão zero/nula.
    Permissão nível 1 = Permissão de executar algo.
    Permissão nível 2 = Permissão de gravar algo.
    Permissão nível 3 = Permissão 1 e 2 unidas.
    Permissão nível 4 = Permissão apenas para leitura.
    Permissão nível 5 = Leitura e execução.
    Permissão nível 6 = Leitura e gravação.
    Permissão nível 7 = Permissão total.

    Utilizamos 3 digitos de números no parâmetro. 
    Cada algarismo é o número de acesso para um tipo de usuário diferente.
    supondo que temos os números 775. 
    O primeiro número (7) é permissão do administrador.
    O segundo número (7) é permissão de um grupo especifíco.
    O terceiro número (5) é permissão do usuário qualquer que acesse o sistema.
    */
    mkdir($pasta, $permissao);
    echo "Diretório criado com sucesso";
}


?>

