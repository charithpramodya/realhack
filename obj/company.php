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

	function updateCompany($company_id, $company_name,$company_email,$company_color,$company_description){
		$sql = "UPDATE companies SET  company_name='$company_name', company_email='$company_email', company_color='$company_color', company_description='$company_description' WHERE company_id = '$company_id'";
		$this->conn->query($sql);

	}

	function deleteCompany($company_id){
		$sql = "DELETE FROM companies WHERE company_id=$company_id";
		$this->conn->query($sql);
	}




}














  ?>