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

	function updateAdmin($email, $password){
		$sql = "UPDATE administrators SET password = $password WHERE email = $email";
		$this->conn->query($sql);
	}

	function removeAdmin($email){
		$sql = "DELETE FROM administrators WHERE email=$email";
		$this->conn->query($sql);
	}





}










 ?>