<?php

ob_start();
session_start();// INICIANDO A SESSION

$cod 				= md5(rand());
$cap_code 			= substr($cod, 0,6);
$_SESSION['secure']	= $cap_code;

// FORMATAÇÃO
$text				= $_SESSION['secure'];
$font_style			= "../fonts/display.ttf";
$font_size			= 14; // TAMANHO DA FONTE
$width				= 100; // LARGURA DA IMAGEM
$height				= 40; // ALTURA DA IMAGEM
$image				= imagecreatetruecolor($width, $height); // DEFINE A LARGURA E A ALTURA DA IMAGEM
$fundoImage			= imagecolorallocate($image, 255, 255, 255); // DEFINE COR DE FUNDO DA IMAGEM
$text_color			= imagecolorallocate($image, 0, 0, 0); // DEFINERR A COR DO TEXTO

$back_alpha			= imagesavealpha($image, true); //canal alpha

// FIM DA FORMATAÇÃO

// PREPARANDO A IMAGEM
imagefill($image, 0, 0, $fundoImage); // PREPARANDO A IMAGEM COM FUNDO
//imagestring($image, 5, 10, 10, $cap_code, $text_color);
imagettftext($image, $font_size, 0, 10, 30, 0, $font_style,  $_SESSION['secure']);
// imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )

header("Content-type: image/png");
//header("Content-type: image/jpeg");
imagepng($image);
//imagejpeg($image);
imagedestroy($image);
//imagestring(image, font, x, y, string, color)

/*
	session_start();
	$random = md5(rand());
	$captcha_code = substr($random, 0, 6);
	$_SESSION["captcha_code"] = $captcha_code;

	$target = imagecreatetruecolor(70,30);
	$captcha_background = imagecolorallocate($target, 255, 255, 255);
//	$captcha_background = imagecolorallocate($target, 255, 78, 19);

	imagefill($target,0,0,$captcha_background);
	$captcha_fore_color = imagecolorallocate($target, 0, 0, 0);
	imagestring($target, 8, 5, 5, $captcha_code, $captcha_fore_color);
	header("Content-type: image/jpeg");
	imagejpeg($target);
*/
/*
header('Content-type: image/png');
$text = 'R$ 10,90';
$font = 'arial.ttf';

$image  = imagecreatetruecolor(187, 44);

imagesavealpha($image, true); //canal alpha
imagealphablending($image, false); //Desabilita a mesclagem

$color = imagecolorallocate($image, 0, 70, 140);
$background = imagecolorallocatealpha($image, 0, 0, 0, 127);

imagefill($image, 0, 0, $background);
imagecolortransparent($image, $background);

imagettftext($image, 25, 0, 0, 33, $color, $font, $text);

imagepng($image);
imagedestroy($image);*/

/*
<?php
header('Content-type: image/png');
$text = 'R$ 10,90';
$font = 'arial.ttf';

$image  = imagecreatetruecolor(187, 44);

imagesavealpha($image, true); //canal alpha
imagealphablending($image, false); //Desabilita a mesclagem

$color = imagecolorallocate($image, 0, 70, 140);
$background = imagecolorallocatealpha($image, 0, 0, 0, 127);

imagefill($image, 0, 0, $background);
imagecolortransparent($image, $background);

imagettftext($image, 25, 0, 0, 33, $color, $font, $text);

imagepng($image);
imagedestroy($image);

*/

?>