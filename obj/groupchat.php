<?php
include_once 'config/config.php';
class GroupChat{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addGroupChat($company_id,$chatname,$member_count,$members){
		$sql="INSERT INTO groupchats(company_id,chatname,member_count,members) VALUES('$company_id','$chatname','$member_count','$members')";
		$this->conn->query($sql);

	}

	function updateGroupChat($groupchat_id, $chatname, $member_count, $members){
		$sql = "UPDATE groupchats SET chatname='$chatname', member_count='$member_count', members='$members' WHERE groupchat_id=$groupchat_id";
		$this->conn->query($sql);		
	}

	function deleteGroupChat($groupchat_id){
		$sql = "DELETE FROM groupchats WHERE groupchat_id=$groupchat_id";
		$this->conn->query($sql);
	}





}














  ?>