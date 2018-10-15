<?php


class DB{

	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $conn;
	
	function __construct(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password);
		if ($this->conn->connect_error) {
	    		die("Connection failed: " . $this->conn->connect_error);
		} 
		echo "Connected successfully";
	}

	function getconnection(){
		return $this->conn;
	}
	

}










   ?>