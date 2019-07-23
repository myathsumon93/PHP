<?php
$image = ImageCreateTrueColor( 200, 200 );
ImageFilledRectangle( $image, 0, 0, 199, 199, 0x000000 );
$color = 0xFFFFFF;
$black = 0x000000;
ImageColorTransparent( $image, $color );
$style = array( $black, $black, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT );
ImageSetStyle( $image, $style );
$transparent = ImageColorsForIndex( $image, ImageColorTransparent( $image ) );
print_r( $transparent );
?>
