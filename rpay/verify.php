<?php

require('config.php');
require_once('../dbconnect.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $payment_status = 'PAID';
    $ordId = $_SESSION['order_id'];
    $date = date('Y-m-d H:m:s');
    $response = mysqli_query($conn,"SELECT * FROM payment WHERE `txn_id` = '".$ordId."'");
    $row = mysqli_fetch_assoc($response);
    $query = "UPDATE `payment` SET `payment_status`= 'TXN_SUCCESS', `remarks`= '".json_encode($_POST)."', `updated_on`= '".$date."' WHERE `txn_id` = '".$ordId."'";
    mysqli_query($conn,$query);
    /*$html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";*/
}
else
{
    $payment_status = 'FAILED';
    $ordId = $_SESSION['order_id'];
    $date = date('Y-m-d H:m:s');
    $response = mysqli_query($conn,"SELECT * FROM payment WHERE `txn_id` = '".$ordId."'");
    $row = mysqli_fetch_assoc($response);
    $query = "UPDATE `payment` SET `payment_status`= 'TXN_FAILED', `remarks`= '".json_encode($_POST)."', `updated_on`= '".$date."' WHERE `txn_id` = '".$ordId."'";
    mysqli_query($conn,$query);
    /*$html = "<p>Your payment failed</p>
             <p>{$error}</p>";*/
}

/*echo $html;*/
$_SESSION["payment_status"]= $payment_status;
header("Location:../index.php");
