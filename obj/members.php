<?php 
include_once 'config/config.php';
class  Members{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addAdmin($name,$email,$company_id){
		$sql="INSERT INTO  members(name,email,company_id) VALUES('$name','$email',$company_id)";
		$this->conn->query($sql);

	}





}










 ?>