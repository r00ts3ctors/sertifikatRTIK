<?php

$text = 'Fakrullah Maulana Ganteng Sekali';
$font_size = 60;  // Font size is in pixels.
$font_file = 'C:\Windows\Fonts\Sitka.ttc';
$img = 'Sertifikat/coba2.png';  // path to image
$img2 = 'imgs/image.png';  // path & name of the image to save on server

// Retrieve bounding text-box:
$txt_space = imagettfbbox($font_size, 0, $font_file, $text);

// Determine text width and height
$txt_width = abs($txt_space[4] - $txt_space[0]);
$txt_height = abs($txt_space[3] - $txt_space[1]);

// get the image in php
$im = imagecreatefrompng($img);

// text color
$clr = imagecolorallocate($im, 0, 0, 0);

// Get image Width and Height
$image_width = imagesx($im);
$image_height = imagesy($im);

// set starting x and y coordinates for the text, so that it is horizontally and vertically centered
$x = abs($image_width - $txt_width) /2;
$y = abs(($image_height - $txt_height) / 2) - 300;

// Add text to image:
imagettftext($im, $font_size, 0, $x, $y, $clr, $font_file, $text);
   header('Content-type: image/png');
// save the image on server
imagepng($im);

// Destroy image in memory to free-up resources:
imagedestroy($im);
