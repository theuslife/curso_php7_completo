<?php     

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Dyana Jorge", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
//Segundo parâmetro no imagejpeg irá criar um arquivo físico
imagejpeg($image);
imagedestroy($image);

?>