<?php
	// addmin - t@t.com hello1234
	include_once 'obj/members.php';

	$admin=new Members();
	

	print_r($admin->showMembersByCompanyId(4));

   ?>