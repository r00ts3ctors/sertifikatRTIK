<?php

header('Content-type: image/png');

 // Create Image From Existing File
 $jpg_image = imagecreatefrompng('Sertifikat/coba.png');

 // Allocate A Color For The Text
 $white = imagecolorallocate($jpg_image, 0, 0, 0);

 // Set Path to Font File
$font_path = 'C:\Windows\Fonts\Sitka.ttc';

 // Set Text to Be Printed On Image , I set it to uppercase
 $text = strtoupper("Fakrullah Maulana");

 // Print Text On Image
 // imagettftext($jpg_image, 75, 0, 50, 400, $white, $font_path, $text);


imagettftext($jpg_image, 100, 0, 1400, 1000, $white, $font_path, $text);

imagepng($jpg_image);
// Clear Memory
imagedestroy($jpg_image);?>
