<?php
$image = ImageCreateTrueColor( 200, 200 );
ImageFilledRectangle( $image, 0, 0, 199, 199, 0xFFFFFF );
$x = 20;
$y = 35;
$text_color = 0x000000; 
$text = 'Hello PHP!';
ImageString( $image, 4, $x, $y, $text, $text_color );
ImageStringUp( $image, 1, $x + 100, $y + 100, 'I love PHP Cookbook', $text_color );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy ($image );
?>
