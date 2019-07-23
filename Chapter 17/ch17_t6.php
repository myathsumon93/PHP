<?php
$black = 0x000000;
$white = 0xFFFFFF;
$width = 500;
$height = 300;
$image = ImageCreateTrueColor( $width, $height );
$style = array( $black, $black, $white, $white );
ImageSetStyle( $image, $style );
ImageLine( $image, 0, 0, $width, $height, IMG_COLOR_STYLED );
ImageFilledRectangle( $image, 0, 0, 100, 100, IMG_COLOR_STYLED );
$style_one = array( $white, $white, $white, $white, $white, $black, $black, $black, $black, $black );
ImageSetStyle( $image, $style_one );
ImageFilledRectangle( $image, 500, 0, 400, 100, IMG_COLOR_STYLED );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
