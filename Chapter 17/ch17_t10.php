<?php
$image = ImageCreateTrueColor( 200, 50 );
ImageFilledRectangle( $image, 0, 0, 199, 49, 0xFFFFFF );
$size = 20;
$angle = 0;
$x = 20;
$y = 35;
$text_color = 0x000000;
$text = 'Hello PHP!';
$fontpath =  __DIR__ . '/font/AlexBrush-Regular.ttf';
ImageFTText( $image, $size, $angle, $x, $y, $text_color, $fontpath, $text );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
