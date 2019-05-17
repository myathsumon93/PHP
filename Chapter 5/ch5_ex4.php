<?php
/**
* Changing color code from decimal to hexadecimal formal
* @param int $red, $green, $blue
* @return hexa number
*/
function wcolor( $red, $green, $blue ) {
	return sprintf( '#%02x%02x%02x', $red, $green, $blue );
}
print wcolor( 0, 255, 255 );

/**
* Changing color code from decimal to hexadecimal formal
* @param int $red, $green, $blue
* @return hexa number
*/
function wcolor1( $red, $green, $blue ) {
	$hex = [ dechex( $red ), dechex( $green ), dechex( $blue ) ];
	foreach ( $hex as $i => $val ) {
		if ( strlen( $i ) == 1 ) {
			$hex[ $i ] = "0$val";
		}
	}
	return '#' . implode( '', $hex );
}
print wcolor( 255, 244, 225 );
?>
