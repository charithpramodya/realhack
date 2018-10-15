<?php 
include_once 'config/config.php';
class Messages{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addMessage($groupchat_id,$message,$member_id){
		$timestamp = time();
		$sql="INSERT INTO messages(groupchat_id,message,member_id,timestamp) VALUES($groupchat_id,'$message','$member_id', '$timestamp')";
		$this->conn->query($sql);
	}

	function deleteMessage($msg_id){
		$sql = "DELETE FROM messages WHERE msg_id=$msg_id";
		$this->conn->query($sql);
	}





}










 ?>