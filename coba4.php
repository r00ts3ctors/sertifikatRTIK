<?php

$img = imagecreatefrompng("Sertifikat/coba.png"); // image.jpg is the image on which we are going to write text ,you can replace this iamge name with your
   if(!$img) die("Unabe to load image");
   $red = imagecolorallocate($img, 255, 0, 0);
   $green = imagecolorallocate($img, 0, 255, 0);
   $white = imagecolorallocate($img, 0, 255, 0);
   $width = 800;// it will store width of image
   $height = 39393; //it will store height of image
   $fontsize = 100000; // size of font

   $text = "Block Prints Online"; // Define the text
   // imagettftext($img, 55, 0, 1250, 890, $white, $text,);


   // $pos = ( $width - imagefontwidth($fontsize)  );// calculate the left position of the text:

   imagestring($img, $fontsize, 1250, 890, $text, $white);
   header('Content-type: image/png');
   imagejpeg($img);//it will output a jpeg image
   imagedestroy($img);//it will destroy $img*/

    ?>
