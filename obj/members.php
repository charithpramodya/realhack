<?php 
include_once 'config/config.php';
class  Members{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addMember($name,$email, $company_id){
		$sql="INSERT INTO  members(name,email,company_id) VALUES('$name','$email',$company_id)";
		$this->conn->query($sql);
	}

	function updateMember($member_id, $name, $email, $company_id){
		$sql = "UPDATE members SET name='$name', email='$email', company_id='$company_id' WHERE member_id='$member_id'";
		$this->conn->query($sql);
	}

	function removeMember($member_id){
		$sql = "DELETE FROM members WHERE member_id=$member_id";
		$this->conn->query($sql);
	}




}










 ?>