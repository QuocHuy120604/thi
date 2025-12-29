<?php 

if(isset($_POST['firstname']) && 
   isset($_POST['username']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $data = "firstname=".$firstname."&username=".$username;
    
    if (empty($firstname)) {
    	$em = "Full name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($username)){
    	$em = "User name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else {

    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(firstname, username, password) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$firstname, $username, $pass]);

    	header("Location: ../signup.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../signup.php?error=error");
	exit;
}
