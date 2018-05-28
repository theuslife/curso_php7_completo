<?php

//Transação ajuda em questões de comandos perigosos

//Um update ou delete não pode ser desfeito, a não ser que faça backup, porém é um processo danoso. 

/*
    Transação é um processo onde ou tudo dar certo e eu confirmo isto, ou ele não acontece. 
    Então ele nos fornece uma opção de Ctrl Z antes de confirmar um Delate, update e assim por diante.
*/

//Commit para confirmar a transação e o rollback para retornar

/*
    Commit só dará certo quanto tudo der realmente certo. Um exemplo é uma transação de dinheiro 
    de uma conta bancária a outra, se caso uma pessoa confirmar o envio do dinheiro e por alguma 
    circustância este dinheiro não chegou ao destinário, portanto, o dinheiro não irá ficar flutuando,
    ele terá um rollback de volta a conta do remetente. 
 */

$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//beginTransaction é para a transação, e ela está amarrada a conexão

$conexao->beginTransaction();

/*
    Outra maneira de passar um parâmetro é com o ponto de interrogação e então criamos 
    um array no execute onde jogaremos nossas variáveis em cada índice de acordo com a ordem
*/
$comando = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 6;

//Joguei o ID que substituirá o parâmetro no comando acima.
$comando->execute(array($id));

//Com a execução do rollback, nada será feito no banco de dados
/* $conexao->rollback(); */

//Com commit ele aceitará a remoção
$conexao->commit();

echo "Dados deletados com sucesso!";


?>