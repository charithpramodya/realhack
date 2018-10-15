<?php 
include_once 'config/config.php';
class Admin{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addAdmin($email,$password){
		$sql="INSERT INTO administrators(email,password) VALUES('$email','$password')";
		$this->conn->query($sql);

	}





}










 ?>