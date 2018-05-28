<?php     

header("Content-type: image/jpeg");
$file = "wallpaper.jpg";
$newWidth = 256;
$newHeight = 256;
//List() irá pegar largura e altura e jogar nos parâmetros. 
//O getimagesize trás para nós um array de informações
list($oldWidth, $oldHeight) = getimagesize($file);

//Criou imagem
$newImage = imagecreatetruecolor($newWidth, $newHeight);

//"Criou" imagem antiga
$oldImage = imagecreatefromjpeg($file);

//Esta função abaixo imagecopyresampled() possui muitos parâmtros
/* 
1° parâmetro: Destíno da imagem 
2° parâmetro: Imagem de origem
3° parâmetro:Posiçaõ do eixo X na imagem destino
4° parâmetro: Posição do eixo Y na imagem destino
5° parâmetro: Posição do eixo X na imagem de origem
6° parâmetro: Posição do eixo Y na imagem de origem 
7° parâmetro: largura da imagem destino
8° parâmetro: Altura da imagem destino
9° parâmetro: Largura da imagem origem
10° parâmetro: Altura da imagem origem
*/

//thumbnail sendo gerada
imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

imagejpeg($newImage);
$imagedestroy($oldImage);
imagedestroy($newImage);

?>

