<?php
class HeaderSaver {
	public $headers = array();
	public $code = null;
	public function header( $curl, $data ) {
		if ( is_null( $this->code ) && preg_match( '@^HTTP/\d\.\d (\d+) @', $data, $matches ) ) {
			$this->code = $matches[1];
		}
		else{
			$trimmed = rtrim( $data );
			if ( strlen( $trimmed ) ) {
				if ( ( $trimmed[0] == ' ' ) || ( $trimmed[0] == "\t" ) ) {
					$trimmed = preg_replace( '@^[ \t]+@', ' ', $trimmed );
					$this->headers[ count( $this->headers ) - 1 ] .= $trimmed;
				}
				else {
					$this->headers[] = $trimmed;
				}
			}
		}
		return strlen( $data );
	}
}
$h = new HeaderSaver();
$c = curl_init( 'http://www.w3schools.com' );
curl_setopt( $c, CURLOPT_HEADERFUNCTION, array( $h, 'header' ) );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
$page = curl_exec( $c );
print 'The response code was: ' . $h->code . '<br>';
print 'The response headers were: ';
foreach ( $h->headers as $header ) {
	print $header . '<br>';
}
?>
