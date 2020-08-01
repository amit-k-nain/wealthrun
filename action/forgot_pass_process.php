<?php
    include("../dbconnect.php"); 
    session_start();    
    
    if(isset($_POST['forpassword'])){
    	$email = $_POST['email'];
    	$query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
    	$getnum_rows = mysqli_num_rows($query);
    	if($getnum_rows == 1){
    	    $to = $email;
    	    $subject = "Password Recovery";
    	    // To send HTML mail, the Content-type header must be set
            $header = "MIME-Version: 1.0\r\n";
            $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
            // Create email headers
            $header .= 'Reply-To: '.$to."\r\n" .
            'X-Mailer: PHP/'.phpversion();
 
            // Compose a simple HTML email message
            $message = '<a href="../change_password.php?mail_id='.base64_encode($to).' ">Click To Change Your Password</a>';
            $forgotmail = mail($to,$subject,$message,$header);
            if($forgotmail == true){
                $_SESSION['email_sent'] = "Mail has been sent to your email";
                header("Location:../index.php");
            }else{
                $_SESSION['invalid_email'] = "Invalid email!!";
                header("Location:../index.php");
            }
    }
        else{
        	$_SESSION['not_reg'] = "Your are not registered";
            header("Location:../index.php");
        }
    }
?>