<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b91d00363befc8";$this->pass="44aaf11d";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_1d7b04f81589f0c";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
