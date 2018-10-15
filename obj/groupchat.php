<?php
include_once 'config/config.php';
class GroupChat{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addGroupChat($company_id,$chatname,$member_count,$members){
		$sql="INSERT INTO groupchats(company_id,chatname,member_count,members) VALUES($company_id,'$chatname',$member_count,'$members')";
		$this->conn->query($sql);

	}




}














  ?>