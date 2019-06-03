<?php
class DBHandler implements SessionHandlerInterface {
	protected $dbh;
	public function open( $save_path, $name ) {
		try {
			$this->connect( $save_path, $name );
			return true;
		} catch ( PDOException $e ) {
			return false;
		}
	}
	public function close() {
		return true;
	}
	public function destroy( $session_id ) {
		$sth->execute( array( $session_id ) );
		return true;
	}
	public function gc( $maxlifetime ) {
		$sth = $this->dbh->prepare( "DELETE FROM sessions WHERE last_update < ?" );
		$sth->execute( array( time() - $maxlifetime ) );
		return true;
	}
	public function read( $session_id ) {
		$sth = $this->dbh->prepare( "SELECT session_data FROM sessions WHERE session_id = ?" );
		$sth->execute( array( $session_id ) );
		$rows = $sth->fetchAll( PDO::FETCH_NUM );
		if ( count( $rows ) == 0 ) {
			return '';
		} else {
			return $rows[0][0];
		}
	}
	public function write( $session_id, $session_data ) {
		$now = time();
		$sth = $this->dbh->prepare( "UPDATE sessions SET session_data = ?, last_update = ? WHERE session_id = ?" );
		$sth->execute( array( $session_data, $now, $session_id ) );
		if ( $sth->rowCount() == 0 ) {
			$sth2 = $this->dbh->prepare( "INSERT INTO sessions ( session_id, session_data, last_update ) VALUES ( ?, ?, ? )" );
			$sth2->execute( array( $session_id, $session_data, $now ) );
		}
	}
	public function createTable( $save_path, $name, $connect = true ) {
		if ( $connect ) {
			$this->connect( $save_path, $name );
		}
		$sql = "CREATE TABLE sessions (
			session_id VARCHAR(64) NOT NULL,
			session_data MEDIUMTEXT NOT NULL,
			last_update TIMESTAMP NOT NULL,
			PRIMARY KEY (session_id)
		)";
		$this->dbh->exec( $sql );
	}
	protected function connect( $save_path ) {
		$parts = parse_url( $save_path );
		if ( isset( $parts['query'] ) ) {
			parse_str( $parts['query'], $query );
			$user = isset( $query['user'] ) ? $query['user'] : 'root';
			$password = isset( $query['password'] ) ? $query['password'] : 'pwdpwd';
			$dsn = $parts['scheme'] . ':';
			if ( isset( $parts['host'] ) ) {
				$dsn .= '//' . $parts['host'];
			} 
			$dsn .= $parts['path'];
			$this->dbh = new PDO( $dsn, $user, $password );
		} else {
			$this->dbh = new PDO( $save_path );
		}
		$this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
		try {
			$this->dbh->query( "SELECT 1 FROM sessions LIMIT 1" );
		} catch ( Exception $e ) {
			$this->createTable( $save_path, NULL, false );
		}
	}
}
?>
