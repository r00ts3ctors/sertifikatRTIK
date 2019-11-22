<?php

$text = 'SERTIFIKAT';
$text2 = 'Maulana';
$font_size = 80;  // Font size is in pixels.
$font_file = 'C:\Windows\Fonts\Sitka.ttc';

$font_pertama = 'C:\xampp\htdocs\eSertifikat\font\Montserrat-Black.ttf';

$img = 'Sertifikat/coba3.jpg';  // path to image
$img2 = 'imgs/image.png';  // path & name of the image to save on server

// Retrieve bounding text-box:
$txt_space = imagettfbbox($font_size, 0, $font_file, $text);

$txt_space2 = imagettfbbox($font_size, 0, $font_file, $text2);
// Determine text width and height
$txt_width = abs($txt_space[4] - $txt_space[0]);
$txt_height = abs($txt_space[3] - $txt_space[1]);

$txt_width2 = abs($txt_space2[4] - $txt_space2[0]);
$txt_height2 = abs($txt_space2[3] - $txt_space2[1]);
// get the image in php
$im = imagecreatefromjpeg($img);

// text color
$clr = imagecolorallocate($im, 0, 0, 0);

// Get image Width and Height
$image_width = imagesx($im);
$image_height = imagesy($im);

$image_width2 = imagesx($im);
$image_height2 = imagesy($im);
$x2 = abs(($image_width2 - $txt_width2) /2) ;
$y2 = abs(($image_height2 - $txt_height2) / 2) - 460;

// set starting x and y coordinates for the text, so that it is horizontally and vertically centered
$x = abs($image_width - $txt_width) /2 ;
$y = abs(($image_height - $txt_height) / 2) - 750;

// Add text to image:
imagettftext($im, $font_size, 0, $x, $y, $clr, $font_file, $text);
imagettftext($im, 40, 0, 1460, 580, $clr, $font_pertama, "DIBERIKAN KEPADA");
imagettftext($im, 80, 0, $x2, $y2, $clr, $font_file, $text2);
imagettftext($im, 40, 0, 1360, 890, $clr, $font_pertama, "Atas Partisipasinya Sebagai");
imagettftext($im, 80, 0, 1490, 1080, $clr, $font_pertama, "PESERTA");
imagettftext($im, 60, 0, 1090, 1280, $clr, $font_pertama, "Dalam Kegiatan Dengan Tema : ");
// save the image on server
header('Content-type: image/jpg');
imagejpeg($im);

// Destroy image in memory to free-up resources:
imagedestroy($im);
