<?php
$reader = new XMLReader();
$reader->open( __DIR__ . '/book.xml' );
while ( $reader->read() ) {
	if ( $reader->nodeType == XMLREADER::ELEMENT && $reader->localName == 'author' ) {
		$reader->read();
		print $reader->value . '<br>';
	}
}
?>
