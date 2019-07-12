<?php
$url = 'http://www.example.com/upload.php';
$filename = 'big-one.jpg';
$fp = fopen( $filename,'r' );
$c = curl_init( $url );
curl_setopt( $c, CURLOPT_PUT, true );
curl_setopt( $c, CURLOPT_INFILE, $fp );
curl_setopt( $c, CURLOPT_INFILESIZE, filesize( $filename ) );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
$page = curl_exec( $c );
print $page;
curl_close( $c );
?>
