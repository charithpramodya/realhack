<?php

include_once "../obj/groupchat.php";
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$groupchat=new GroupChat();

$data = json_decode(file_get_contents("php://input"));

if($data->type=='createGroupChats'){
	$groupchat->addGroupChat($data->company_id,$data->chat_name,0,"");
}


 














    ?>