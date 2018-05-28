<?php     

//Biblioteca GD pode existir em outras linguagens de programação também

//Você onsegue criar thumbnail com o PHP unsado a biblioteca
//GD. Ele reduz o tamanho/aumenta e ainda o tamanho do arquivo
//de acordo com sua resolução
header("Content-Type: image/png");

//$image variável que receberá a imagem.
/* A função imagecreate() tem como parâmetros a largura e altura */
$image = imagecreate(256, 256);

//Criando cores para usarmos
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0 , 0);

/* imagestring para criarmos um texto na imagem */
/*Primeiro parâmetro nossa imagem, segundo o tamanho da fonte em px
terceiro a posição width, quarto o height, quinto o texto e por último
a cor do texto  */
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

//imagepng é para informar o tipo de imagem, é essencial isto
imagepng($image);

//É necessário também destruir a imagem, para realocar mémoria
imagedestroy($image);








?>