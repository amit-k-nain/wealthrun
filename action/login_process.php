<?php
include("../dbconnect.php");
session_start();

if(isset($_POST['signin'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' && password = '$password' && verify = 1");
	$getnum_rows = mysqli_num_rows($query);
	
	if($getnum_rows == 1){
		$alldetails = mysqli_fetch_array($query);
		$userid = $alldetails['user_id'];
		$full_name = $alldetails['full_name'];
		$mobile = $alldetails['mobile'];
		
		$_SESSION['userid'] = $userid;
		$_SESSION['email'] = $email;
		$_SESSION['full_name'] = $full_name;
		$_SESSION['mobile'] = $mobile;
		header("Location:../user-profile.php");
	}
	else{
		$_SESSION['wrong_cred'] = "Your Credentials is wrong or email not verified";
		header("Location:../index.php");
	}
}
?>