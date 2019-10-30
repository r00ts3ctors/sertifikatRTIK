<?php
//Set the Content Type

$jpg_image = imagecreatefromjpeg('Sertifikat/coba4.jpg'); // posisi Sertifikat Master
$white = imagecolorallocate($jpg_image, 0, 255, 0); // warna2 huruf yang akan di pakai
$font_path = 'C:\Windows\Fonts\Sitka.ttc'; // posisi huruf yang akan di gunakan


// Set Text to Be Printed On Image atau text yang akan di gunakan
$text = "Fakrullah Maulana";
$text2 = "fakrullah maulan";
// imagettftext($jpg_image, 55, 0, 400, 890, $white, $font_path, $text2,);
// imagettftext($jpg_image, 10, 45, $x, $y, $white, $font_path, 'Powered by PHP ' . phpversion());





// Clear Memory
// Send Image to Browser
header('Content-type: image/png');
// imagepng($jpg_image, "out.png");
imagepng($jpg_image);
imagedestroy($jpg_image);

 ?>
