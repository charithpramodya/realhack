<?php
	// addmin - t@t.com hello1234
	include_once 'obj/messages.php';

	$admin=new Messages();
	

	print_r($admin->calculateMessageTime(1539640313));

   ?>