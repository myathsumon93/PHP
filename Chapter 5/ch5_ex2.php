<?php
/**
* Using global file path
* @param string $url, $alt, $height, $width
* @param global varivalbe image_path
* @return htmltag $html
*/
function html_img( $file, $alt = null, $height = null, $width = null ) {
	if ( isset( $GLOBALS['image_path'] ) ) {
		$file = $GLOBALS['image_path'] . $file;
	}
	$html = '<img src = "' . $file . '"';
	if ( isset( $alt ) ) {
		$html .= ' alt="' . $alt . '"';
	}
	if ( isset( $height ) ) {
		$html .= ' height="' . $height . '"';
	}
	if ( isset( $width ) ) {
		$html .= ' width="' . $width . '"';
	}
	$html .= '/>';
	return $html;
}
print html_img( 'flower.jpeg', null, 400, 300 );
?>
