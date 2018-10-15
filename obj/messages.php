<?php 
include_once 'config/config.php';
class Messages{

	

	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}

	function addAdmin($groupchat_id,$message,$member_id){
		$sql="INSERT INTO messages(groupchat_id,message,member_id) VALUES($groupchat_id,'$message',$member_id)";
		$this->conn->query($sql);

	}





}










 ?>