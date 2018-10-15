<?php
include_once 'config/config.php';
class ChatBot{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addChatBot($companyId,$chatbotData){
		$sql="INSERT INTO chatbots(company_id,chatbot_data) VALUES('$companyId','$chatbotData')";
		$this->conn->query($sql);
	}

	function updateChatBot($chatbot_id, $chatbotData){
		$sql = "UPDATE chatbots SET chatbot_data = '$chatbotData' WHERE chatbot_id = '$chatbot_id'";
		$this->conn->query($sql);
	}

	function removeChatBot($chatBotId){
		$sql = "DELETE FROM chatbots WHERE chatbot_id=$chatBotId";
		$this->conn->query($sql);
	}
}














  ?>