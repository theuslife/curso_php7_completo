<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Entre chaves estamos então citando nossas variáveis do index.php -->
<h1>Hello <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?> </h1>
<p>Teste de template :) </p>
<p>Versão do PHP: <?php echo htmlspecialchars( $versao, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
