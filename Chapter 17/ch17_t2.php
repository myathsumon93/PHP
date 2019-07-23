<?php
$width = 500;
$height = 300;
$image = ImageCreateTrueColor( $width, $height );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, $width - 1, $height - 1, $background_color );
$x1 = $y1 = 0 ;
$x2 = $y2 = $height - 1;
$x3 = 400;
$y3 = 200;
$x4 = 250;
$y4 = 50;
$color = 0xFF0000;
ImageLine( $image, $x1, $y1, $x2, $y2, $color );
ImageRectangle( $image, $x1, $y1, $x2, $y2, $color );
$points = array( $x1 + 500, $y1, $x2, $y2, $x3, $y3, $x4, $y4 );
ImagePolygon( $image, $points, count( $points ) / 2, $color );
ImageFilledPolygon( $image, $points, count( $points ) / 2, $color );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
