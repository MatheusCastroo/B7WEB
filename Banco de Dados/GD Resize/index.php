<?php
$arquivo = 'logowebwe.png';
$maxWidth = 200;
$maxHeight = 200;

list($originalWidth, $originalHeight) = getimagesize($arquivo);
$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefrompng($arquivo);

imagecopyresampled($imagem, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

header("Content-Type: image/png");
imagepng($imagem, null, 100);

