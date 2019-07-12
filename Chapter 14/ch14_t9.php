<?php
ini_set( 'default_socket_timeout', 3 );
$page = file_get_contents( 'http://www.w3schools.com/' );
echo $page;
?>
