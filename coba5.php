<?php

header("Content-type: image/png");

//settings
$fontSize = 35;
$backgroundPath = "Sertifikat/coba.png";
$font_path = 'C:\Windows\Fonts\Sitka.ttc';
$text = "This is a sample text. This is a second sample text.";
$padding = 50; //from edges

//create image
$im = imagecreatefrompng($backgroundPath);
$imageSize = getimagesize($backgroundPath);
$width = $imageSize[0];
$height = $imageSize[1];

//get textRows
$textRows = GetTextRowsFromText($fontSize, $font, $text, $width - ($padding * 2));

//colors
$colorWhite = imagecolorallocate($im, 255, 255, 255);
$colorBlack = imagecolorallocate($im, 0, 0, 0);
$colorGrey = imagecolorallocate($im, 130, 130, 130);

//border
imagerectangle($im, 0, 0, $width - 1, $height - 1, $colorGrey);
print_r(imagepng($img));//it will output a jpeg image
imagedestroy($img);//it will destroy $img*/
//
// for($i = 0; $i < count($textRows); $i++)
// {
//     //text size
//     $line_box = imagettfbbox ($fontSize, 0, $font, $textRows[$i]);
//     $text_width = GetTextWidth($fontSize, $font, $textRows[$i]);
//     $text_height = GetMaxTextHeight($fontSize, $font, $textRows) * 3;
//
//     //align: center
//     $position_center = ceil(($width - $text_width) / 2);
//
//     //valign: middle
//     $test = (count($textRows) - $i) - ceil(count($textRows) / 2);
//     $position_middle = ceil(($height - ($text_height * $test)) / 2);
//
//     imagettfstroketext($im, $fontSize, 0, $position_center, $position_middle, $colorWhite, $colorGrey, $font, $textRows[$i], 2);
// }
// imagepng($im);
//
// function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
//
//     for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
//         for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
//             $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
//
//    return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
// }
//
// function GetTextWidth($fontSize, $font, $text)
// {
//     $line_box = imagettfbbox ($fontSize, 0, $font, $text);
//     return ceil($line_box[0]+$line_box[2]);
// }
//
// function GetTextHeight($fontSize, $font, $text)
// {
//     $line_box = imagettfbbox ($fontSize, 0, $font, $text);
//     return ceil($line_box[1]-$line_box[7]);
// }
//
// function GetMaxTextHeight($fontSize, $font, $textArray)
// {
//     $maxHeight = 0;
//     for($i = 0; $i < count($textArray); $i++)
//     {
//         $height = GetTextHeight($fontSize, $font, $textArray[$i]);
//         if($height > $maxHeight)
//             $maxHeight = $height;
//
//     }
//
//     return $maxHeight;
// }
//
// function GetTextRowsFromText($fontSize, $font, $text, $maxWidth)
// {
//     $text = str_replace("\n", "\n ", $text);
// $text = str_replace("\\n", "\n ", $text);
//     $words = explode(" ", $text);
//
//     $rows = array();
//     $tmpRow = "";
//     for($i = 0; $i < count($words); $i++)
//     {
//
//         //last word
//         if($i == count($words) -1)
//         {
//             $rows[] = $tmpRow.$words[$i];
//             break;;
//         }
//
//
//         if(GetTextWidth($fontSize, $font, $tmpRow.$words[$i]) > $maxWidth) //break
//         {
//             $rows[] = $tmpRow;
//             $tmpRow = "";
//         }
//         else if(StringEndsWith($tmpRow, "\n ")) //break in text
//         {
//             $tmpRow = str_replace("\n ", "", $tmpRow);
//             $rows[] = $tmpRow;
//             $tmpRow = "";
//         }
//
//         //add new word to row
//         $tmpRow .= $words[$i]." ";
//
//     }
//
//     return $rows;
// }
//
// function StringEndsWith($haystack, $needle)
// {
//     return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
// }


?>
