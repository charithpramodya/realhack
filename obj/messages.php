<?php 
include_once 'config/config.php';
class Messages{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addMessage($groupchat_id,$message,$member_id){ //Adds a message
		$timestamp = time();
		$sql="INSERT INTO messages(groupchat_id,message,member_id,timestamp) VALUES($groupchat_id,'$message','$member_id', '$timestamp')";
		$this->conn->query($sql);
	}

	function showMessages($groupchat_id){ //Show Messages
		$sql = "SELECT * FROM messages WHERE groupchat_id = $groupchat_id";
		$result = $this->conn->query($sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	function deleteMessage($msg_id){ // Deletes a Message
		$sql = "DELETE FROM messages WHERE msg_id=$msg_id";
		$this->conn->query($sql);
	}

	function calculateMessageTime($timestamp){ // Calculates and Shows Message Time
		if (time() -$timestamp < 1 * 60 * 1000){
			return "Just Now";
		}else if (time() - $timestamp >= 1*60*1000 AND $timestamp - time() <= 2*60*1000 ){
			return "1 Minute ago";
		}else if (time() - $timestamp >= 2*60*1000 AND $timestamp - time() <= 3*60*1000){
			return "2 Minutes ago";
		}
		

	}





}










 ?>