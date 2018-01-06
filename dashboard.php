<html>
<head>
</head>
<body>

<?php 
	//print_r($_POST);
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if (strlen($user)==0 || strlen($pass)==0){
		header("Location: form.php?error");
	}
	else{
	//greet the user
		echo "Welcome $user. i know your password"
		
	//check if the user and pass are correct
		
	//connect to db
	$conn = mysqli_connect("localhost", "root", "", "cms");
	//select db
		//happend ^ connect and select
		
	//check if connecion is OK
	if( !$conn) {
	echo "Error connecting to MySQL Server.";
	}
	//else{
	//echo "Ok!";
	//}
	//select db
	//prepare sql statement
	
	$sql = "SELECT *FROM users WHERE
			username='".$user."' AND Password='".sha1($pass)."' ";
	echo $sql;		
	//execute sql
	$result = mysqli_query($conn,$sql);
	
	//process the result
		
	}
?>

</body>
</html>