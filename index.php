<?php
	// addmin - t@t.com hello1234
	include_once 'obj/chatbot.php';

	$admin=new ChatBot();
	

	$x = $admin->showChatBotByCompanyId(1);
	print_r($x);

   ?>