<?php
//session_start();
include("../dbconnect.php");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		
		$txnid = $_POST["TXNID"];
		$orderid = $_POST["ORDERID"];
		$txndate = $_POST["TXNDATE"];
		$txnstatus = $_POST["STATUS"];

        $query = mysqli_query($conn,"UPDATE payment SET txn_id ='$txnid', payment_status='$txnstatus', txn_date='$txndate', is_deleted=0 WHERE order_id='$orderid' ");

        if($query){

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

            $message = "";
            $status = "true";
            $subject = 'WealthRun - New Service is booked!';
            $toemail = 'info@wealthrun.in';
            $toname = 'WealthRun';

            $mail->SetFrom( 'info@wealthrun.in' , 'WealthRun' );
            $mail->AddReplyTo( 'wealthrun.in@gmail.com' , 'WealthRun' );
            $mail->AddAddress( $toemail , $toname );
            $mail->addBCC('goyalsumit093@gmail.com','WealthRun');
            $mail->Subject = $subject;

            $name = "<br>Order Id: $orderid<br><br>";
            $email = "A service is booked by someone with order id: $orderid. Please check!<br><br>";

            $body = "$name $email";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();
            /**/
        }

        $_SESSION['payment_done'] = "Your payment is successfully done. Order id is ".$orderid; 
        header("Location: ../index.php");
        die;
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		$_SESSION['payment_failed'] = "Failed! Something wrong with payment please try again";
        header("Location: ../index.php");
        die;
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
}
else {
	echo "<b>Checksum mismatched.</b>";
	session_destroy();
	die;
	//Process transaction as suspicious.
}