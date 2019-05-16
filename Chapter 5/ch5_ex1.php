<?php
/**
*Returning HTML image tag
* @param string $url
* @param string $alt
* @param int $height
* @param int $width
* @return htmltag $html
*/
function html_img( $url, $alt = null, $height = null, $width = null ) {
	$html = '<img src = "' . $url . '"';
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
//print html_img( 'flower.jpeg' );
print html_img( 'flower.jpeg', null, 400, 300 );
?>