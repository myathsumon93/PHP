<?php
include 'ImageStringCenter.php';
$w = 500;
$h = 120;
$image = ImageCreateTrueColor( $w, $h );
ImageFilledRectangle( $image, 0, 0, $w - 1, $h - 1, 0x000000 );
$color = 0xFFFFFF;
$text = 'Pack my box with five dozen liquor jugs.';
for( $font = 1, $y = 5; $font <= 5; $font++, $y += 20 ) {
	list( $x ) = ImageStringCenter( $image, $text, $font );
	ImageString( $image, $font, $x, $y, $text, $color );
}
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy ($image );
?>
