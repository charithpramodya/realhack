<?php
include_once 'config/config.php';
class Company{


	var $conn;

	function __construct(){
		$db=new DB();
		$this->conn=$db->getconnection();
	}


	function addCompany($company_name,$company_email,$admin_created,$company_color,$company_description){ //Adds a company
		$sql="INSERT INTO companies(company_name,company_email,admin_created,company_color,company_description) VALUES('$company_name','$company_email',$admin_created,'$company_color','$company_description')";
		$this->conn->query($sql);

	}

	function showCompanyByEmail($company_email){ //Returns a specific company by Email
		$sql = "SELECT * FROM companies WHERE company_email='$company_email'";
		$result = $this->conn->query($sql);
		return mysqli_fetch_assoc($result);
	}

	function showCompanyById($company_id){ //Returns a specific company by ID
		$sql = "SELECT * FROM companies WHERE company_id='$company_id'";
		$result = $this->conn->query($sql);
		return mysqli_fetch_assoc($result);
	}

	function updateCompany($company_id, $company_name,$company_email,$company_color,$company_description){ //Updates a specific company info
		$sql = "UPDATE companies SET  company_name='$company_name', company_email='$company_email', company_color='$company_color', company_description='$company_description' WHERE company_id = '$company_id'";
		$this->conn->query($sql);

	}

	function deleteCompany($company_id){
		$sql = "DELETE FROM companies WHERE company_id=$company_id";
		$this->conn->query($sql);
	}




}














  ?>