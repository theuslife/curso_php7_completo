<?php

/*
    O primeiro parâmetro da classe PDO é o tipo de banco, o nome do banco que queremos acessar e o seu local. 
    O segundo parâmetro o login e por último a senha.
*/
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

/*
    Com PDO é possível trabalhar direto com transações no banco de dados. Um exemplo de transações é quando vamos
    sacar um dinheiro em uma máquina no banco, porém a máquina não há todo o valor necessário que o usuário deseja 
    sacar, portanto ele interrompe a transação. Ou tudo acontence, ou nada acontece.
*/

//Aqui é a mesma coisa com a classe MYSQLi.
$dadosEmEspera = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dadosEmEspera->execute();

/*
    O fetchAll já fatia todas as linhas, diferente do mysqli onde faziamos um while. 
    Este método já faz isto internamente. Podemos passar o dados ASSOC(Para mostrar 
    somente os dados associativos) no parâmetro do nosso método. Por ser um método 
    estático podemos passar conforma a sintaxe abaixo. A variável $resultado logo 
    será um array com todas as informações de nossos registros da tabela tb_usuarios.
*/
$resultados = $dadosEmEspera->fetchAll(PDO::FETCH_ASSOC);

//Mostrando em forma de JSON.
echo json_encode($resultados);
echo "<hr>";

//Mostrando nosso array no var_dump
var_dump($resultados);
echo "<hr>";

/*
    Mostrando todos os elementos no foreach. Como a variável resultados é um coleção de arrays, 
    fazemos com que row receba estes elementos arrays e depois mostrar os elementos e seus respectivos 
    índices e elementos. 
*/
foreach($resultados as $row)
{
    foreach($row as $indice => $elementos)
    {
        echo "<strong>" . $indice . "</strong> ";
        echo $elementos;
        echo "<br>";
    }
        echo "<hr>";
}

?>