<?php
$filename = __DIR__ . '/ch17_img/view.png';
$scale = 0.3;
$image = ImageCreateFromPNG( $filename );
$thumbnail = ImageCreateTrueColor( ImageSX( $image ) * $scale, ImageSY( $image ) * $scale );
ImageColorTransparent( $thumbnail, ImageColorAllocateAlpha( $thumbnail, 0, 0, 0, 127 ) );
ImageAlphaBlending( $thumbnail, false );
ImageSaveAlpha( $thumbnail, true );
ImageCopyResampled( $thumbnail, $image, 0, 0, 0, 0, ImageSX( $thumbnail ), ImageSY( $thumbnail ), ImageSX( $image ), ImageSY( $image ) );
header( 'Content-type: image/png' );
ImagePNG( $thumbnail );
ImageDestroy( $image );
ImageDestroy( $thumbnail );
?>
