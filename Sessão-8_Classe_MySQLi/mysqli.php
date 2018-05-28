<?php

//Criamos uma variável que irá se conectar ao Banco de Dados

/*
    O primeiro parâmetro é o local do servidor, neste caso o IP ou nome do servidor que estamos utilizando. 
    Neste nosso caso, o localhost do Wamp.
*/

//Segundo parâmetro é o usuário e o terceiro a senha. No nosso caso padrão do wamp, o login é root e a senha é vazia.

//Quarto parâmetro é banco que criamos no MySQL. Neste caso iremos utilizar o banco dbphp7

$conexao = new mysqli("localhost", "root", "","dbphp7");

/*
    É possível ocorrer um erro ao se conectar a um banco mesmo que os dados estejam corretos. 
    Por isto é sempre bom tratarmos este erro de conexão caso ocorra.
*/

/*
    Na classe MySQLi, temos um atributo que retorna o erro caso ocorra, portanto se 
    este erro ocorrer podemos tratar ele de acordo com o código abaixo.
*/
if ($conexao->connect_error)
{
    echo "Error: " . $conexao->connect_error;
}

/*
    Temos um atributo na nossa variável de conexão chamada prepare() onde podemos colocar comandos SQL, 
    neste caso iremos usar o Inset into para colocar valores em dois registros de nossas colunas no banco dbphp7
*/

//Nossa variável se chamará modoEspera, por conta que enquanto o método execute não for chamado, ele manterá todos os dados e informações na variável.

//Os pontos de interrogações em Values() diz que iremos informar os dados através do PHP.
$modoEspera = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

/*
    Aqui estamos então inserindo os dados naquele parâmetro dos values. O atributo se chama bind_param. 
    Que espera os tipos de dados das interrogações no parâmetro acima. 
*/

/*
    O primeiro atributo pede o tipo primitivo de dado que será informado. Neste caso, login e senha são strings, 
    portanto colocamos dois "ss" minúsculos. Caso fosse um float e inteiro ficaria "fi". Em seguida os valores que 
    queremos inserir respectivamente. O campo dos valores é obritário colocarmos variável, pois é necessário nesta 
    função a passem de parâmetro por refêrencia, alterando os valores tanto na classe quanto na variável.
*/
$modoEspera->bind_param("ss", $login, $senha);

$login = "matheus";
$senha = "12345";

/* 
    E então booom. Caso você veja os dados no MySQL Workbeench verá que os dados foram inseridos com sucesso lá. 
    Consultando com um select.
*/
$modoEspera->execute();

/*
    Para adicionarmos mais um registro é fácil, apenas trocamos os valores das variáveis $login e $senha conforme
    abaixo e manda executar novamente e terá um novo registro no nosso banco de dados.
*/
$login = "Elaine";
$senha = "4789";
$modoEspera->execute();

//Com isto podemos utilizar loops para podermos acrescentar os dados e assim por diante.




?>