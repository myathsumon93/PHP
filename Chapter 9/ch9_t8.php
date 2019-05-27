<?php
$options = array();
$when = new DateTime();
for ( $i = 0; $i < 10 ; ++$i ) {
	$options[ $when->getTimestamp() ] = $when->format( "D, F j, Y" );
	$when->modify( "+1 day" );
}
foreach ( $options as $value => $label ) {
	print "<option value='$value'>$label</option>\n";
}
?>
