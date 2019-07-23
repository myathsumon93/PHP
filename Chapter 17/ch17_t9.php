<?php
include 'ImageStringCenter.php';
$imgpath =  __DIR__ . '/ch17_img/button.png';
$image = imageCreateFromPng( $imgpath );
imageAlphaBlending( $image, true );
imageSaveAlpha( $image, true );
$x = $y = 50;
$size = 24;
$font = 5;
$color = 0x000000;
$text = 'Click Button';
list( $x ) = ImageStringCenter( $image, $text, $font );
ImageString( $image, $font, $x, $y, $text, $color );
ImageColorTransparent($image, ImageColorAllocateAlpha( $image, 0, 0, 0, 127 ) );
ImageAlphaBlending( $image, false );
ImageSaveAlpha($image, true);    
header( 'Content-type: image/png' );
imagePng( $image );
ImageDestroy( $image );
?>
