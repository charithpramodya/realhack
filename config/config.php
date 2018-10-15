<?php


class DB{

	var $servername = "realhackfi:asia-south1:realhackfinal";
	var $username = "root";
	var $password = "";
	var $db="ellipsischat";
	var $conn;
	
	function __construct(){
		$this->conn = $db = new PDO('mysql:unix_socket=/cloudsql/realhackfi:realhackfinal;dbname=ellipsischat;charset=utf8','root','');//new mysqli(null, "root", "", $db, null, ":/cloudsql/realhackfi");
		if ($this->conn->connect_error) {
	    		die("Connection failed: " . $this->conn->connect_error);
		} 	
		
	}

	function getconnection(){
		return $this->conn;
	}
	

}










   ?>
