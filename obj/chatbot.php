<?php
include_once 'config/config.php';
class ChatBot{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addChatBot($companyId,$chatbotData){
		$sql="INSERT INTO chatbots(company_id,chatbot_data) VALUES('$email','$password')";
		$this->conn->query($sql);

	}




}














  ?>