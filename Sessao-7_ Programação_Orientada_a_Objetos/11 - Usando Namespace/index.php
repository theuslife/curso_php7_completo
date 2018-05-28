<?php


//Namespace junto com autoload fica bem organizado, mas é necessário uma boa organização e usabilidade disto. Classes com o mesmo nome que herdam uma da outra, mas são para funções diferentes o namespace cuida desta parte.

//Ao criar isto é bom fazer uma documentação informando por exemplo que na pasta classe as classes na raíz desta pasta são genéricas, as subpastas são especializações 

require_once("config.php");
//Para usar um namespace especifico indique sua pasta e o nome da classe com a barra invertida
use Cliente\Cadastro;

$matheus = new Cadastro();
$matheus->setNome("Matheus Rodrigues da Silva");
$matheus->setSenha("47653679838");
$matheus->setEmail("matheus.alg10@gmail.com");
$matheus->registrarVenda();
echo "<hr>";
echo $matheus;




