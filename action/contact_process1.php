<?php
include("../dbconnect.php");
//session_start();

if(isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $query = "INSERT into `contact` (`name`,`email`,`message`,`phone`) VALUES ('".$name."','".$email."','".$message."','".$phone."')";
    $result = mysqli_query($conn,$query);

    $referrer = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : '';
    if($result){
        /**/
        require_once('../phpmailer/class.phpmailer.php');
        require_once('../phpmailer/class.smtp.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'mail.wealthrun.in';
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@wealthrun.in';
        $mail->Password = 'admin@wealthrun.in';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $status = "true";

        $mail->SetFrom( 'info@wealthrun.in' , 'WealthRun' );
        $mail->AddReplyTo( 'wealthrun.in@gmail.com' , 'WealthRun' );
        $mail->AddAddress( 'wealthrun.in@gmail.com' , 'WealthRun' );
        $mail->addBCC( 'goyalsumit093@gmail.com' , 'WealthRun' );
        $mail->Subject = 'Query from contact form on WealthRun.';

        $name1 = "<br>Name: $name<br><br>";
        $email1 = "Email: $email<br><br>";
        $phone1 = "Phone: $phone<br><br>";
        $msg1 = "Message: $message<br><br>";
        $referrer11 = $_SERVER['HTTP_REFERER'] ? '<br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

        $body = "$name1 $email1 $phone1 $msg1 $referrer11";

        $mail->MsgHTML( $body );
        $sendEmail = $mail->Send();
        
        //print_r($sendEmail);die;
        /**/

        $_SESSION['success'] = $message = "Success, will revert back you soon!";
        //print_r($_SESSION);die;
        header("Location:".$referrer.'?message='.$message);
    }
    else{
        $_SESSION['error'] = "Error, please try again !";
        header("Location:".$referrer);
    }
}