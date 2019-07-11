<?php
$html = '<a href="http://www.oreilly.com">I <b>love computer books.</b></a>';
$html .= '<?php echo "Hello!" ?>';
print $html . '<br>';
print strip_tags( $html );
print '<br>';
print filter_var( $html, FILTER_SANITIZE_STRING );
$stream = fopen( __DIR__ . '/example.html', 'r' );
stream_filter_append( $stream, 'string.strip_tags' );
print stream_get_contents( $stream );
?>
