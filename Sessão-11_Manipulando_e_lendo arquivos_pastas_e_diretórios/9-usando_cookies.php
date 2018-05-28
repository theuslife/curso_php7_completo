<?php

/* Cookies são dados que ficam armazenados na máquina do
usuário temporariamente. Um usuário autenticado por exemplo
que após sair de um aplicação consegue retornar para ela
ainda logado em sua conta */
$dados = ARRAY("empresa"=>"xTheus Trainning");

/*Primeiro parâmetro o nome do cookie
  Segundo parâmetro os dados que serão armazenados
  Terceiro parâmetro o tempo que ficará na máquina do usuário
  Neste caso, o tempo será o tempo atual da data de criação
  do cookie mais 3600 segundos o que é equivalente a uma hora
  pós criação do cookie */
setcookie("NOME_DO_COOKIE", json_encode($dados), time() + 3600);


?>