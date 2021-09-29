<?php

Class Connection{
 
	private $server = "mysql:host=localhost;dbname=mydatabase";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "There is some problem in connection: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}
 
 //PHP Data Objects (or PDO ) are a collection of APIs and interfaces that attempt to streamline and consolidate the various ways databases can be accessed and manipulated into a singular package. Thus, the PDOException is thrown anytime something goes wrong while using the PDO class, or related extensions.
?>