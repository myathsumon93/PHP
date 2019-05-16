<?php
/**
* Using global file path
* @param string $url
* @param string $alt
* @param int $height
* @param int $width
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
//$image_path = 'image/';
//print html_img( 'download.jpeg' );
print html_img( 'flower.jpeg', null, 400, 300 );
?>