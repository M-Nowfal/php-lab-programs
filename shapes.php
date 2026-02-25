<?php
header('Content-type: image/png');
$img_width = 400;
$img_height = 300;

$image = imagecreatetruecolor($img_width, $img_height);

$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$green = imagecolorallocate($image, 0, 153, 0);

imagefill($image, 0, 0, $white);

// Rectangle
imagefilledrectangle($image, 50, 50, 200, 150, $red);

// Circle
imagefilledellipse($image, 300, 100, 100, 100, $blue);


$point = [125, 200, 75, 280, 175, 280];

// Triangle
imagefilledpolygon($image, $point, 3, $green);

imagepng($image);
?>