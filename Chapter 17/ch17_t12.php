<?php
$image = ImageCreateFromPNG( __DIR__ . '/ch17_img/view.png' );
$stamp = ImageCreateFromPNG( __DIR__ . '/ch17_img/watermark.png' );
$margin = [ 'right' => 10, 'bottom' => 10 ];
ImageCopy( $image, $stamp, imagesx( $image ) - imagesx( $stamp ) - $margin[ 'right' ], imagesy( $image ) - imagesy( $stamp ) - $margin[ 'bottom' ], 0, 0, imagesx( $stamp ), imagesy( $stamp ) );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
