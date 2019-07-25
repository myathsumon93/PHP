<?php
function ImageStringCenter( $image, $text, $font ) {
	$width = array( 1 => 5, 6, 7, 8, 9 );
	$height = array( 1 => 6, 8, 13, 15, 15 );
	$xi = ImageSX( $image );
	$yi = ImageSY( $image );
	$xr = $width[ $font ] * strlen( $text );
	$yr = $height[$font];
	$x = intval( ( $xi - $xr ) / 2 );
	$y = intval( ( $yi - $yr ) / 2 );
	return array( $x, $y );
}
?>
