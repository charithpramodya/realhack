<?php
include_once 'config/config.php';
class Company{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addCompany($company_name,$company_email,$admin_created,$company_color,$company_description){
		$sql="INSERT INTO companies(company_name,company_email,admin_created,company_color,company_description) VALUES('$company_name','$company_email',$admin_created,'$company_color','$company_description')";
		$this->conn->query($sql);

	}




}














  ?>