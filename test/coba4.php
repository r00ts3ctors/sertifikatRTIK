<?php

$img = imagecreatefromjpeg("Sertifikat/coba4.jpg");
   $height = 39393; //it will store height of image
   $fontsize = 100000; // size of font

   $text = "Block ddd Online"; // Define the text
   // imagettftext($img, 55, 0, 1250, 890, $white, $text,);


   // $pos = ( $width - imagefontwidth($fontsize)  );// calculate the left position of the text:

   imagestring($img, $fontsize, 1250, 890, $text, $white);
   header('Content-type: image/jpeg');
   imagejpeg($img);//it will output a jpeg image
   imagedestroy($img);//it will destroy $img*/

    ?>
