<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Merchant Check Out Page</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta name="description" content="Wealthrun - Income Tax Return (ITR)">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/animate/animate.min.css">
    <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/theme-elements.css">
    <link rel="stylesheet" href="../css/theme-blog.css">
    <link rel="stylesheet" href="../css/theme-shop.css">
    <link rel="stylesheet" href="css/user-profile.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/demos/demo-medical.css">
    <link rel="stylesheet" href="../css/skins/skin-medical.css">
    <script src="../master/style-switcher/style.switcher.localstorage.js"></script>
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../vendor/modernizr/modernizr.min.js"></script>
</head>
<body>

<?php include("../header.php"); ?>

<?php
$service_id = $_POST['service_id'];
$total = count($_FILES['docs']['name']);

if($total < 1 || empty($service_id)){
    $_SESSION['wrong_cred'] = "Please fill all required details.";
    header("Location:../index.php");
    exit();
}

$sqlp111 = "SELECT * FROM `services` WHERE `status`= 1 AND `id` = '".$service_id."'";
$resp111 = mysqli_query($conn,$sqlp111);
$nump111 = mysqli_num_rows($resp111);

if($nump111 < 1){
    $_SESSION['wrong_cred'] = "Service not found.";
    header("Location:../index.php");
    exit();
}

$abcService = mysqli_fetch_array($resp111);
//print_r($abcService);die;

$time = time();
$user_id = $_SESSION['userid'];
$name = $_SESSION['full_name'];
$email = $_SESSION['email'];
$servnam = $abcService['servic'];
$docrec = "received";
$servicsecost = $abcService['s_cost'];
$message = $_POST['message'];
$fille = $_FILES['docs']['name'];

$xyz = [];
for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['docs']['tmp_name'][$i];
    if ($tmpFilePath != ""){
        $a = time().$_FILES['docs']['name'][$i];
        $newFilePath = "../uploaded_docs/" . $a;
        $ab = move_uploaded_file($tmpFilePath, $newFilePath);
        $xyz[] = $a;
    }
}

$fll = implode(',',$xyz);
$date = date('Y-m-d');

if($a){
    mysqli_query($conn,"INSERT INTO payment (user_id, user_name, service, msg, docs, txn_amount, status, is_deleted, txn_date, order_id) VALUES ('$user_id','$name','$servnam','$message','$fll','$servicsecost','$docrec',1,'$date','$time')");
}
//print_r('dd');die;
?>

<div class="container emp-profile">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1>Merchant Check Out Page</h1>
        </div>
        <div class="col-sm-8 offset-sm-2">
            <form method="post" action="../PaytmKit/pgRedirect.php">
                <table border="1"  class="table">
                    <tbody class="thead-dark">
                    <tr>
                        <th>S.No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td><label>ORDER_ID::*</label></td>
                        <td><input id="ORDER_ID" readonly tabindex="1" maxlength="20" size="20"
                                   name="ORDER_ID" autocomplete="off"
                                   value="<?php echo $time ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td><label>CUSTID ::*</label></td>
                        <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" readonly name="CUST_ID" autocomplete="off" value="<?=$user_id;?>"></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td><label>txnAmount*</label></td>
                        <td><input title="TXN_AMOUNT" tabindex="10"
                                   type="text" readonly name="TXN_AMOUNT"
                                   value="<?=$servicsecost;?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input class="btn btn-primary" value="CheckOut" type="submit" onclick=""></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#main_logo').attr('src', '../img/wr-logo.png');
    });
</script>

</body>
</html>