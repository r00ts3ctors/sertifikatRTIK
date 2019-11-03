<?php

header('Content-type: image/jpeg');
$template = imagecreatefromjpeg('assets/template/sertifikat.jpg'); // posisi Sertifikat Master
$hitam = imagecolorallocate($template, 0, 0, 0); // warna2 huruf yang akan di pakai

// Text Nama Peserta
$huruf_nama = __DIR__.'\font\Pictorial Signature.ttf';
$warna_nama = imagecolorallocate($template, 0, 191, 255);
$text = "Fakrullah Maulana";

// text tanggal

$huruf_tanggal = __DIR__.'\font\Montserrat-Italic.ttf';
$text2 = "20 November 2019";

$huruf_tema = __DIR__.'/font/Montserrat-ExtraBold.ttf';
$text1_tema = "\"DIGITAL EKONOMI : PANDUAN PEMBERDAYAAN";
$text2_tema = "UMKM EKONOMI   GREBEK PASAR\"";

$nomor = "No.Sertifikat: 234567";

imagettftext($template, 30, 0, 2960, 2383, $hitam, $huruf_tema, $nomor);
//
// imagettftext($template, 280, 0, 560, 1240, $warna_nama, $huruf_nama, $text);
// imagettftext($template, 50, 0, 1120, 1470, $hitam, $huruf_tanggal, $text2);
//
// imagettftext($template, 65, 0, 580, 1720, $hitam, $huruf_tema, $text1_tema);
// imagettftext($template, 65, 0, 610, 1830, $hitam, $huruf_tema, $text2_tema);



// imagepng($template, "out.png");
imagejpeg($template);
imagedestroy($template);

?>
