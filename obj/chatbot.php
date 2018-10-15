<?php
include_once 'config/config.php';
class ChatBot{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addChatBot($companyId,$chatbotData){ //Adds a chatbot
		$sql="INSERT INTO chatbots(company_id,chatbot_data) VALUES('$companyId','$chatbotData')";
		$this->conn->query($sql);
	}

	function showChatBot($chatbot_id){ //Shows Data for a specific Chatbot by ID
		$sql = "SELECT * FROM chatbots WHERE chatbot_id='$chatbot_id'";
		$result = $this->conn->query($sql);
		return mysqli_fetch_assoc($result);
	}

	function showChatBotsByCompanyId ($company_id){ // Lists all the Chatbots for a specific company
		$sql = "SELECT * FROM chatbots WHERE company_id=$company_id";
		$result = $this->conn->query($sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	function updateChatBotById($chatbot_id, $chatbotData){ //Updates a specific Chatbot by ID
		$sql = "UPDATE chatbots SET chatbot_data = '$chatbotData' WHERE chatbot_id = '$chatbot_id'";
		$this->conn->query($sql);
	}

	function removeChatBotById($chatbot_id){ //Removes a specific Chatbot by ID
		$sql = "DELETE FROM chatbots WHERE chatbot_id=$chatbot_id";
		$this->conn->query($sql);
	}
}














  ?>