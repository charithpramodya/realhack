<?php 
include_once 'config/config.php';
class  Members{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addMember($name,$email, $company_id){ // Adds Members
		$sql="INSERT INTO  members(name,email,company_id) VALUES('$name','$email',$company_id)";
		$this->conn->query($sql);
	}

	function showMembersByCompanyId($company_id){ // Shows all the members by ID
		$sql = "SELECT * FROM members WHERE company_id=$company_id";
		$result = $this->conn->query($sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);	
	}

	function updateMember($member_id, $name, $email, $company_id){ // Updates Member by Company ID
		$sql = "UPDATE members SET name='$name', email='$email', company_id='$company_id' WHERE member_id='$member_id'";
		$this->conn->query($sql);
	}

	function removeMember($member_id){ //Removes member
		$sql = "DELETE FROM members WHERE member_id=$member_id";
		$this->conn->query($sql);
	}




}










 ?>