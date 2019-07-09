<?php
$dom = new DOMDocument();
$book = $dom->appendChild( $dom->createElement( 'book' ) );
$title = $book->appendChild( $dom->createElement( 'title' ) );
$title->appendChild( $dom->createTextNode( 'PHP Cookbook' ) );
$title->setAttribute( 'edition', '3' );
$sklar = $book->appendChild( $dom->createElement( 'author' ) ); 
$sklar->appendChild( $dom->createTextNode( 'Sklar' ) );
$trachtenberg = $book->appendChild( $dom->createElement( 'author' ) );
$trachtenberg->appendChild( $dom->createTextNode( 'Trachtenberg' ) );
$dom->formatOutput = true;
$dom->save( 'books.xml' );
echo $dom->saveXML();
?>
