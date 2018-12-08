<?php
session_start();
//$link = mysqli_connect("localhost", "root", "mysql", "CrossWorld");
$link = mysqli_connect("localhost:3306", "softwby8", "Meh2Fere@1", "softwby8_newdb");
	//return $conn variable.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];

		$query = "INSERT INTO web_site_users(username,email,fb_id) VALUES ('".$name."','".$email."','".$fb_Id."')";
		$result = mysqli_query($link , $query) or die(mysqli_error());
		if ($result) {
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $name;
			//header("Location: successpage.php");

			echo "successful entry";

		}else{
			echo "error";
		}
}else{
	echo "Try again Later";
}
 ?> 