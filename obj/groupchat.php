<?php
include_once 'config/config.php';
class GroupChat{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addGroupChat($company_id,$chatname,$member_count,$members){ // Adds a group chat
		$sql="INSERT INTO groupchats(company_id,chatname,member_count,members) VALUES('$company_id','$chatname','$member_count','$members')";
		$this->conn->query($sql);
	}

	function showGroupChatsByCompanyId($company_id){ // Returns a list of group chats by company ID
		$sql = "SELECT * FROM groupchats WHERE company_id=$company_id";
		$result = $this->conn->query($sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	function updateGroupChat($groupchat_id, $chatname, $member_count, $members){ //Updates a specific group chat by GroupChatID
		$sql = "UPDATE groupchats SET chatname='$chatname', member_count='$member_count', members='$members' WHERE groupchat_id=$groupchat_id";
		$this->conn->query($sql);		
	}

	function deleteGroupChat($groupchat_id){ // Deletes a group chat by Group Chat ID
		$sql = "DELETE FROM groupchats WHERE groupchat_id=$groupchat_id";
		$this->conn->query($sql);
	}





}














  ?>