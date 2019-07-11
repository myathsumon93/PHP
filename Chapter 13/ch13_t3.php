<?php
$htm = <<< HTML
<p>Some things I enjoy eating are:</p>
<ul>
	<li><a href="http://en.wikipedia.org/wiki/Pickle">Pickles</a></li>
	<li><a href="http://www.eatingintranslation.com/2011/03/great_ny_noodle.html">Salt-Baked Scallops</a></li>
	<li><a href="http://www.thestoryofchocolate.com/">Chocolate</a></li>
</ul>
HTML;
$links = pc_link_extractor( $htm );
foreach ( $links as $link ) {
	print $link[0] . '<br>';
}
/**
 * Extractiing link form html file
 * @param html @htm
 */
function pc_link_extractor( $htm ) {
	$links = array();
	preg_match_all( '/<a\s+.*?href=[\"\']?([^\"\' >]*)[\"\']?[^>]*>(.*?)<\/a>/i', $htm, $matches, PREG_SET_ORDER );
	foreach ( $matches as $match ) {
	$links[] = array( $match[1], $match[2] );
	}
	return $links;
}
?>
