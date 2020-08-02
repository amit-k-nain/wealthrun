<?php
//session_start();
include("../dbconnect.php");

if(isset($_REQUEST['mid']) && $_REQUEST['mid']){
    $email = $_REQUEST['mid'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND `verify` = 0");
    $getnum_rows = mysqli_num_rows($query);
    if($getnum_rows == 1){

        $alldetails = mysqli_fetch_array($query);

        $query1 = mysqli_query($conn,"UPDATE users SET `verify` = 1 WHERE email = '$email' AND `verify` = 0");

        if(!$query1){
            $_SESSION['wrong_cred'] = "Something went wrong !";
            header("Location:../index.php");
            die;
        }

        $userid = $alldetails['user_id'];
        $full_name = $alldetails['full_name'];
        $mobile = $alldetails['mobile'];

        $_SESSION['userid'] = $userid;
        $_SESSION['email'] = $email;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['mobile'] = $mobile;

        $_SESSION['signup_success'] = "Email Verified Successfully !";
        header("Location:../user-profile.php");
        die;
    }else{
        $_SESSION['wrong_cred'] = "Email already verified or not registered !";
        header("Location:../index.php");
        die;
    }
}

$_SESSION['wrong_cred'] = "Email already verified or not registered !";
header("Location:../index.php");
die;