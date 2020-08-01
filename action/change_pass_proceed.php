<?php 
    include("../dbconnect.php");
    session_start();
    
    if(isset($_REQUEST['update'])){
        if(isset($_POST['mail_id'])){
            $mail_id = $_POST['mail_id'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            if($pass==$cpass){
                $update=mysqli_query($conn,"update users set password='$pass' where email='".base64_decode($mail_id)."'");
                if($update){
                    $_SESSION['update_pass']="Password has been changed";
                    header("Location:../index.php");
                }
            }else{
                 $_SESSION['same_pass']="Password must be match";
                 header("Location:../change_password.php");
            }
        }
    }
   
        
    
?>