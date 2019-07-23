<?php
$size = 500;
$width = $size - 200;
$height = $size - 200;
$start = 0;
$end = 270;
$color = 0x00FFAA;
$image = ImageCreateTrueColor( $size, $size );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, $size - 1, $size - 1, $background_color );
$black = 0x000000;
ImageArc( $image, $size / 2, $size / 2, $width, $height, $start, $end, $color );
ImageEllipse( $image, $size / 2, $size / 2, $size - 300, $size - 300, $black );
ImageFilledEllipse( $image, $size / 2, $size / 2, $size - 300, $size - 300, $black );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
