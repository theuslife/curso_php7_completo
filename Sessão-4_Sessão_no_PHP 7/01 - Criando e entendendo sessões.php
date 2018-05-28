<?php
require_once "conf.php";
/* 
As variáveis de sessão são parecidas com as variáveis super globais no quesito de visibilidade. 
Sites normalmente cria um sessão entre o servidor e o cliente, então desconexões do usuário após 
determinado tempo, como em um site de banco por exemplo, ele lhe desloga através dessas sessões 
criadas. Sistemas de logins são bem importantes as sessões 
*/

//A sessão continua rodando mesmo que o usuário mude de página, configurações da página antiga pode continuar rodando.

//Por padrão os sites não vem com sessões (Você pode configurar isto)

//Podemos então dizer que queremos uma sessão com os comando a seguir session_start()

$_SESSION['nome'] = "Matheus";
echo $_SESSION['nome'];

//Podemos limpar uma variável de sessão
session_unset($_SESSION);

//O session destroy irá limpar e remover o usuário as variáveis de sessão. Ela não recebe parâmetros
session_destroy();


