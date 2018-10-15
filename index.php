<?php
	// addmin - t@t.com hello1234
	include_once 'obj/groupchat.php';

	$admin=new GroupChat();
	

	print_r($admin->showGroupChatsByCompanyId(2));

   ?>