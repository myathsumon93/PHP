<?php
class PageSaver {
	protected $db;
	protected $page ='';
	public function __construct() {
		$servername = 'localhost';
		$username = 'root';
		$password = 'pwdpwd';
		$dbname = 'testing';
		try {
			$this->db = new PDO( 'mysql:host=$servername;dbname=$dbname', $username, $password );
			$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}
		catch ( PDOException $e ) {
			echo $sql . '<br>' . $e->getMessage();
		}
	}
	public function write( $curl, $data ) {
		$this->page .= $data;
		return strlen( $data );
	}
	public function save( $curl ) {
		$info = curl_getinfo( $curl );
		$st = $this->db->prepare( 'INSERT INTO save_page ' . '( url, page ) VALUES ( ?, ? )' );
		$st->execute( array( $info[ 'url' ], $this->page ) );
	}
}
$pageSaver = new PageSaver();
$c = curl_init( 'http://www.google.com/ ');
curl_setopt( $c, CURLOPT_WRITEFUNCTION, array( $pageSaver, 'write' ) );
curl_exec( $c );
$pageSaver->save( $c );
?>
