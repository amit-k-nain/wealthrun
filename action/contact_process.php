<?php
include("../dbconnect.php");
session_start();

if(isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $query = "INSERT into `contact` (`name`,`email`,`message`,`phone`) VALUES ('".$name."','".$email."','".$message."','".$phone."')";
    $result = mysqli_query($conn,$query);

    if($result){

        /**/
        require_once('../phpmailer/class.phpmailer.php');
        require_once('../phpmailer/class.smtp.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'mail.wealthrun.in';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@wealthrun.in';
        $mail->Password = 'info@wealthrun.in';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 587;

        $status = "true";

        $mail->SetFrom( 'info@wealthrun.in' , 'WealthRun' );
        $mail->AddReplyTo( 'info@wealthrun.in' , 'WealthRun' );
        $mail->AddAddress( 'info@wealthrun.in' , 'WealthRun' );
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
        /**/

        $_SESSION['success'] = "1";
        header("Location:../contact.php?success=1");
    }
    else{
        $_SESSION['error'] = "1";
        header("Location:../contact.php");
    }
}

?>
<?php
// include("../dbconnect.php");
//  session_start();
    
//      require_once('../phpmailer/class.phpmailer.php');
//         require_once('../phpmailer/class.smtp.php');
//     require_once('db.php');

//     $mail = new PHPMailer();

//     //$mail->SMTPDebug = 3;                               // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'mail.wealthrun.in';                     // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;
//     $mail->Username = 'info@wealthrun.in';                 // SMTP username
//     $mail->Password = 'info@wealthrun.in';                           // SMTP password
//     $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 465;                                    // TCP port to connect to
    
//     $message = "";
//     $status = "true";


//     if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
     
//           $name = $_POST['name'];
//             $email = $_POST['email'];
//             $phone = $_POST['phone'] ?? 0;
//             $message = $_POST['message'];
//             //print_r($phone);die();
//             $sql = "INSERT INTO contact(name, email, message, phone) VALUES ('$name','$email', '$message', '$phone')";
//             $conn->query($sql) === TRUE;
            
//             $subject = isset($subject) ? $subject : 'Inquiry from contact form.';

//           // $botcheck = $_POST['form_botcheck'];

//             $toemail = 'info@wealthrun.in'; // Your Email Address 
//             $toname = 'Wealthrun'; // Your Name

//           // if( $botcheck == '' ) {

//                 $mail->SetFrom( 'info@wealthrun.in' , 'Wealthrun' );
//                 $mail->AddReplyTo( $email , $name );
//                 $mail->AddAddress( $toemail , $toname );
//                 $mail->Subject = $subject;

//                 $name = isset($name) ? "Name: $name<br><br>" : '';
//                 $email = isset($email) ? "Email: $email<br><br>" : '';
//                 $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
//                 $message = isset($message) ? "Message: $msg<br><br>" : '';

//                 $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

//                 $body = "$name $email $phone $message $referrer";

//                 $mail->MsgHTML( $body );
//                 $sendEmail = $mail->Send();

//                 if( $sendEmail == true ):
//                     $message = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
//                     $status = "true";
//                     //die('ok');
//                     //header("Location:"."contact-us.php");
//                     //header("Location: contact-1.php?message=true");
//                 else:
//                     $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
//                     $status = "false";
//                 endif;
//             // } else {
//             //     $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
//             //     $status = "false";
//             // }
      
//     } else {
//         $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
//         $status = "false";
//     }


//     $status_array = array( 'message' => $message, 'status' => $status);
//     echo json_encode($status_array);


?>