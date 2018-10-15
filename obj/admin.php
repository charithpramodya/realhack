<?php 
include_once 'config/config.php';
class Admin{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addAdmin($email,$password){
		$password = md5($password);
		$sql="INSERT INTO administrators(email,password) VALUES('$email','$password')";
		$this->conn->query($sql);
	}

	function updateAdmin($email, $old_password, $new_password){
		$old_password = md5($old_password);
		$new_password = md5($new_password);
		$select_sql = "SELECT * FROM administrators WHERE email = '$email' AND password = '$old_password'";
		$select_result = $this->conn->query($select_sql);
		if($select_result->num_rows){
			$sql = "UPDATE administrators SET password = '$new_password' WHERE email = '$email'";
			$this->conn->query($sql);
			return True;
		}else{
			return False;
		}
	}

	function removeAdmin($email){
		$sql = "DELETE FROM administrators WHERE email=$email";
		$this->conn->query($sql);
	}





}










 ?>