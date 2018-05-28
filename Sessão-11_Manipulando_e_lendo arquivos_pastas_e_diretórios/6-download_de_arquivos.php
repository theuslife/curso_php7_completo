<?php

/*Podemos fazer download de arquivos via PHP, utilizando
o servidor. */

$dirDownload = "downloads";
if(!is_dir($dirDownload))
{
    mkdir($dirDownload);
}

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?=$basename?>">