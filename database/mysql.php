<?php
class mysql {
	private $conn;
	private $server = 'localhost';
	private $user = 'root';
	private $password = '';
	private $database = 'latihan';
	public function connect() {
		if(isset($this->conn)) return $this->conn;
		$this->conn = @mysql_connect($this->server,$this->user,$this->password, true) or die ("Unable connect to mysql."); 
		@mysql_select_db($this->database, $this->conn) or die("Unable to select your default database name.");
	}
	public function disconnect(){
		if(isset($this->conn)) @mysql_close($this->conn);
	}
	//spesialis nangani insert, update dan delete	
	public function query($sql){
		$result = @mysql_query($sql, $this->conn);
		if (!$result) die (mysql_error());
		return $result;
	}
	//spesialis nangani select
	public function results($query, $type = 'object'){
		$result = $this->query($query);
		$return = array();
		while ($row = @mysql_fetch_object($result)) {
		    if($type == 'array') 
		        $return[] = (array) $row;
		    else
		        $return[] = $row;
		}
		@mysql_free_result($result);
		return @$return;
	}
}//end class
?>
