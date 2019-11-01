<?php

$datasertifikat = array(
  'nama' => ucfirst(strtolower('Maulana maulana')),
  'sebagai' => '20 November 2019',
  'tgl' => '20 November 2019',
  'nomor' => '123ABC',
  'tema1' => 'Digital Ekonomi',
  'tema2' => '20 November 2019',
 );


function cetak($datasertifikat )
{
  header('Content-type: image/png');
  // code...
  $template = imagecreatefromjpeg(base_url('assets/template/sertifikat.jpg')); // posisi Sertifikat Master
  // warna huruf
  $hitam = imagecolorallocate($template, 0, 0, 0); // warna2 huruf yang akan di pakai
  $warna_nama = imagecolorallocate($template, 0, 191, 255);

  // jenis huruf
  $huruf_nama = __DIR__.'\font\Pictorial Signature.ttf';
  $huruf_tanggal = __DIR__.'\font\Montserrat-Italic.ttf';
  $huruf_tema =  __DIR__. '\font\Montserrat-ExtraBold.ttf';
  $huruf_peserta =  __DIR__. '\font\Montserrat-BlackItalic.ttf';

  // text inputan

  $text = $datasertifikat['nama'];
  $text1 =  $datasertifikat['sebagai']; // sebagai
  $text2 =  $datasertifikat['tgl']; // sebagai
  $text1_tema = $datasertifikat['tema1'];
  $text2_tema = $datasertifikat['tema2'];
  $text3_tema = $datasertifikat['tema3'];
  $nomor = "No.Sertifikat:" . $datasertifikat['nomor'];


  imagettftext($template, 240, 0, 560, 1240, $warna_nama, $huruf_nama, $text);
  imagettftext($template, 50, 0, 1621, 1381, $hitam, $huruf_peserta, $text1);
  imagettftext($template, 50, 0, 1120, 1470, $hitam, $huruf_tanggal, $text2);
  imagettftext($template, 65, 0, 590, 1720, $hitam, $huruf_tema, $text1_tema);
  imagettftext($template, 65, 0, 590, 1830, $hitam, $huruf_tema, $text2_tema);
  imagettftext($template, 65, 0, 590, 1940, $hitam, $huruf_tema, $text3_tema);
  imagettftext($template, 30, 0, 2960, 2383, $hitam, $huruf_tema, $nomor);


  imagepng($template);
  imagedestroy($template);
  // imagepng($template, "out.png");


}
