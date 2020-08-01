<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("../dbconnect.php");
session_start();
if(isset($_POST['sgnupbtn'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $refer = $_POST['refer'];
    $date = date('Y-m-d');

    if(($full_name == "") && ($email == "") && ($mobile == "") && ($password == "")){
        echo "please fill the details";
    }
    else{
        $email_existed = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' ");
        $em_exist = mysqli_num_rows($email_existed);
        if($em_exist > 0){
            $_SESSION["already_exist"]= "Email already registered";
            header("Location:../index.php");
        }
        else{
            $inserted = mysqli_query($conn,"INSERT INTO users(full_name, email, mobile, password, status, added_on, refer, verify) VALUES ('$full_name','$email','$mobile','$password', 1, '$date','$refer',0)");
            if($inserted == 1){

                /**/
                require_once('../phpmailer/class.phpmailer.php');
                require_once('../phpmailer/class.smtp.php');

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'mail.wealthrun.in';
                $mail->SMTPAuth = true;
                $mail->Username = 'admin@wealthrun.in';
                $mail->Password = 'admin@wealthrun.in';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $message = "";
                $status = "true";
                $subject = isset($subject) ? $subject : 'Successful Registration on WealthRun !';
                $toemail = $email;
                $toname = $full_name;

                $mail->SetFrom( 'info@wealthrun.in' , 'WealthRun' );
                $mail->AddReplyTo( $email , $full_name );
                $mail->addBCC( 'goyalsumit093@gmail.com' , 'WealthRun' );
                $mail->AddAddress( $toemail , $toname );
                $mail->Subject = $subject;

                $name = isset($full_name) ? "<br>Name: $full_name<br><br>" : '';
                $email = isset($email) ? "Email: $email<br><br>" : '';
                $phone = isset($mobile) ? "Phone: $mobile<br><br>" : '';
                $pass = isset($password) ? "Password: $password<br><br>" : '';
                $msg = "Click here to confirm your email: <a href='".basrUrl."action/email_verify_process.php?mid=".$toemail."'>Click Here</a><br><br>";
                $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

                $body = "$name $email $phone $pass $msg $referrer";

                $mail->MsgHTML( $body );
                $sendEmail = $mail->Send();
                
                if(!$sendEmail){
                    $_SESSION["signup_failed"]= "Issue in sending email.";
                header("Location:../index.php");
                }
                /**/

                $_SESSION["signup_success"]= "Please verify email, You are successfully registered !";
                header("Location:../index.php");
            }
            else{
                $_SESSION["signup_failed"]= "Something Went wrong";
                header("Location:../index.php");
            }
        }
    }
}