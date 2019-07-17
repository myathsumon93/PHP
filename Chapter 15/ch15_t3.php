<?php
$a = array( '<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9" );

echo 'Normal: ', json_encode( $a ), '<br>';
echo 'Tags: ', json_encode( $a, JSON_HEX_TAG ), '<br>';
echo 'Apos: ', json_encode( $a, JSON_HEX_APOS ), '<br>';
echo 'Quot: ', json_encode( $a, JSON_HEX_QUOT ), '<br>';
echo 'Amp: ', json_encode( $a, JSON_HEX_AMP ), '<br>';
echo 'Unicode: ', json_encode( $a, JSON_UNESCAPED_UNICODE ), '<br>';
echo 'All: ', json_encode( $a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE ), '<br>';
$b = array();

echo 'Empty array output as array: ', json_encode( $b ), '<br>';
echo 'Empty array output as object: ', json_encode( $b, JSON_FORCE_OBJECT ), '<br>';

$c = array( array( 1,2,3 ) );

echo 'Non-associative array output as array: ', json_encode( $c ), '<br>';
echo 'Non-associative array output as object: ', json_encode( $c, JSON_FORCE_OBJECT ), '<br>';

$d = array( 'foo' => 'bar', 'baz' => 'long' );

echo 'Associative array always output as object: ', json_encode( $d ), '<br>';
echo 'Associative array always output as object: ', json_encode( $d, JSON_FORCE_OBJECT ), '<br>';
?>
