<?php
function Thumbnail($url, $name, $width = 300, $height = true) {

if(!file_exists("../image/" . $name)) {
 $image = ImageCreateFromString(file_get_contents($url));

 // calculate resized ratio
 // Note: if $height is set to TRUE then we automatically calculate the height based on the ratio
 $height = $height === true ? (ImageSY($image) * $width / ImageSX($image)) : $height;

 // create image 
 $output = ImageCreateTrueColor($width, $height);
 ImageCopyResampled($output, $image, 0, 0, 0, 0, $width, $height, ImageSX($image), ImageSY($image));
 ImageJPEG($output, "../image/".$name ,30);
 return $output; 
}
}
?>