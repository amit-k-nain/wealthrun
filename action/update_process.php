<?php
include("../dbconnect.php"); 
session_start();
if(isset($_POST['sgnupbtn']) && $_POST['sgnupbtn'] == 1){
	$full_name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$user_id = $_POST['user_id'];

	if(($full_name == "") || ($user_id == "") || ($mobile == "") || ($password == "")){
        $_SESSION['msg'] = 'Please fill all details.';
        header('Location: ../user-profile.php');
        die;
	}else{
        $sql = "UPDATE `users` SET `full_name` = '".$full_name."',`mobile` = '".$mobile."',`password` = '".$password."' WHERE `user_id` = '".$_POST['user_id']."'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION['full_name'] = $full_name;
            $_SESSION['msg'] = 'Successfully updated profile.';
            header('Location: ../user-profile.php');
            die;
        }
	}
}

$_SESSION['msg'] = 'Something went wrong.';
header('Location: ../user-profile.php');
die;