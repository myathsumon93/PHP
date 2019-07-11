 <?php
 $body = "<p>I like pickles and herring.</p><a href="pickle.php"><img src="pickle.jpg"/>A pickle picture</a>I have a herringbone-patterned toaster cozy.<herring>Herring is not a real HTML element!</herring>";
$words = array( 'pickle','herring' );
$replacements = array();
foreach ( $words as $i => $word ) {
	$replacements[] = "<span class='word-$i'>$word</span>";
}
$parts = preg_split( "{(<(?:\"[^\"]*\"|'[^']*'|[^'\">])*>)}", $body, -1, PREG_SPLIT_DELIM_CAPTURE );
foreach ( $parts as $i => $part ) {
if (isset( $part[0] ) && ( $part[0] == '<' ) ) {
continue;
}
$parts[ $i ] = str_replace( $words, $replacements, $part );
}
$body = implode( '', $parts );
print $body;
?>
