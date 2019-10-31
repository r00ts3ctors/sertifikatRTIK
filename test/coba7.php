<?php
// FETCH IMAGE & WRITE TEXT
$img = imagecreatefrompng('Sertifikat/coba.png'); // template dimana letak
$white = imagecolorallocate($img, 0, 0, 0);

// $txt = "Fakrullah Maulana";
$txt = "Fakrullah Maulana Farras Sidqi";
$txt2 = "Nara Sumber";
$txt3 = "Sosilisasi Penggunaan Social Media Terkini Melineial Merdeka";
$font = "C:\Windows\Fonts\arial.ttf";
// THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);

// THE TEXT SIZE
$text_size = imagettfbbox(28, 0, $font, $txt);
$text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
$text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);
$centerX = CEIL(($width - $text_width) / 2) - $text_width;
$centerX = $centerX<0 ? 0 : $centerX;
$centerY = CEIL(($height - $text_height) / 2) - 300;
$centerY = $centerY<0 ? 0 : $centerY;





$text_size2 = imagettfbbox(25, 0, $font, $txt2);
$text_width2 = max([$text_size2[2], $text_size2[4]]) - min([$text_size2[0], $text_size2[6]]);
$text_height2 = max([$text_size2[5], $text_size2[7]]) - min([$text_size2[1], $text_size2[3]]);
$centerX2 = CEIL(($width - $text_width2) / 2) - $text_width2;
$centerX2 = $centerX2<0 ? 0 : $centerX2;
$centerY2 = CEIL(($height - $text_height2) / 2) + 100;
$centerY2 = $centerY<0 ? 0 : $centerY2;




// kedua


$text_size3 = imagettfbbox(60, 0, $font, $txt3);
$text_width3 = max([$text_size3[2], $text_size3[4]]) - min([$text_size3[0], $text_size3[6]]);
$text_height3 = max([$text_size3[5], $text_size3[7]]) - min([$text_size3[1], $text_size3[3]]);

$centerX3 = CEIL(($width - $text_width3) / 2);
$centerX3 = $centerX3<0 ? 0 : $centerX3;

$centerY3 = CEIL(($height - $text_height3) / 2) + 400;
$centerY3 = $centerY<0 ? 0 : $centerY3;

// echo $text_width3;
//

imagettftext($img, 100, 0, $centerX, $centerY, $white, $font, $txt); // nampilkan tulisan pada gambar
imagettftext($img, 100, 0, $centerX2, $centerY2, $white, $font, $txt2);
imagettftext($img, 60, 0, $centerX3, $centerY3, $white, $font, $txt3);
//
// // OUTPUT IMAGE
header('Content-type: image/png');
imagepng($img);
// imagedestroy($jpg_image);
?>
