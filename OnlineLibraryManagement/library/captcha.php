<?php 
session_start(); 

// Generate random verification code
$text = rand(10000, 99999); 
$_SESSION["vercode"] = $text; 

// Image dimensions
$height = 25; 
$width = 65;   

// Create the image
$image_p = imagecreate($width, $height); 

// Set colors
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 

// Set content type header
header("Content-type: image/jpeg");

// Add text to image
$font_size = 5; // imagefont size must be 1–5 for imagestring
imagestring($image_p, $font_size, 5, 5, $text, $white); 

// Output image
imagejpeg($image_p, null, 80); 
imagedestroy($image_p);
?>
