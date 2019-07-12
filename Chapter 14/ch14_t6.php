<?php
$url = 'https://www.w3schools.com';
$body = 'monkey=uncle&rhino=aunt';
$c = curl_init( $url );
curl_setopt( $c, CURLOPT_POST, true );
curl_setopt( $c, CURLOPT_POSTFIELDS, $body ); 
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
$page = curl_exec( $c );
echo $page;
curl_close( $c );
?>
