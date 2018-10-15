<?php    

    $conn=new mysqli("realhackfi:asia-south1:realhackfinal","root","",ellipsischat);
    
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>
