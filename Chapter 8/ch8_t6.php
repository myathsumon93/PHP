<?php
print_r( $_SERVER );
print '<br><br><br>';
print_r( headers_list() );
header( 'Location: https://www.tutorialspoint.com/' );
header( 'HTTP/1.0 404 Not Found' );
exit;
?>
