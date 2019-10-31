<?php
// Set the content-type
header('Content-Type: image/jpeg');

// Create the image
$im = imagecreatetruecolor('assets/template/sertifikat.jpg');
$text = 'Testing...';

$font ='C:\xampp\htdocs\eSertifikat\font\Montserrat-Black.ttf';

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

// The text to draw
imagefilledrectangle($im, 0, 0, 399, 29, $white);
// Replace path by your own font path

// Add some shadow to the text

// Add the text
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagejpeg($im);
imagedestroy($im);

?>
