<?php

$filename = "logo.png";

//File_get_contents => Função que ler por inteiro o arquivo
//base64_encode => Converte binário para base64 (String)

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;
echo $base64encode;
?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">






