<?php

//Set the Content Type
header('Content-type: image/png');



// Create Image From Existing File
$jpg_image = imagecreatefrompng('Sertifikat/coba.png');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 0, 255, 0);

// Set Path to Font File
$font_path = 'C:\Windows\Fonts\Sitka.ttc';

// Set Text to Be Printed On Image
$text = "Fakrullah Maulana";
$text2 = "fakrullah maulan";
$text3 = "fakrullah maulan";

// Print Text On Image
imagettftext($jpg_image, 55, 0, 1250, 890, $white, $font_path, $text,);
// imagettftext($jpg_image, 55, 0, 200, 890, $white, $font_path, $text2,);
// imagettftext($jpg_image, 55, 0, 400, 890, $white, $font_path, $text2,);
// imagettftext($jpg_image, 10, 45, $x, $y, $white, $font_path, 'Powered by PHP ' . phpversion());
// Send Image to Browser
print_r(imagepng($jpg_image));
// imagepng($jpg_image, "out.png");

// Clear Memory
imagedestroy($jpg_image);

 ?>
