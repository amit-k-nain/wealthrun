<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard</title>
    <meta name="description" content="Wealthrun - Income Tax Return (ITR)">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/user-profile.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-medical.css">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/skin-medical.css">		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
<!--==================== Header Section Start =====================-->
<?php include("header.php");
if(!isset($_SESSION['full_name'])){
    header("Location:index.php");
}
?>
<!--==================== Header Section End =====================-->

<?php
$userid = $_SESSION['userid'];
$query1 = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$userid' ");
$userdata = mysqli_fetch_array($query1);

?>
<?php

$sql1 = "SELECT * FROM payment WHERE `user_id` = '".$userid."' AND `status` = 'query'";
$result1 = mysqli_query($conn, $sql1);
$num1 = mysqli_num_rows($result1);
if($num1 > 0){
    echo '<h4 align="center">Check your applications, there are some query from WealthRun.</h4>';
}

if(isset($_SESSION['msg']) && $_SESSION['msg']){
    echo '<h4 align="center">'.$_SESSION['msg'].'</h4>';
}
unset($_SESSION['msg']);
?>
<section id="user-prfile">
<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4" >
            <div class="profile-img">
                <!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>-->
                <!--<div class="file btn btn-lg btn-primary">
                    Change Photo
                    <input type="file" name="file"/>
                </div>-->
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                <h5><?=$userdata['full_name'];?>'s Profile</h5>
            </div>
        </div>
        <div class="col-md-2">
            <input onclick="document.getElementById('id01').style.display='block'" type="submit" class="profile-edit-btn edit-profile" name="btnAddMore" value="Edit Profile"/>
        </div>
    </div>
    <hr><br>
    <div class="row">
        <div class="col-md-4">
            <div class="profile-work">
                <p>Important Links</p>
                <a href="order-history.php">Your Applications</a><br/>
                <a href="index.php">Website URL</a><br/>
                <a href="services.php">All Services</a><br/>
                <a href="contact.php">Contact Page</a><br/>
                <a href="hra_cal.php">HRA Calculator</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <label><b>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
                </div>
                <div class="col-md-6">
                    <p><?=$userdata['full_name'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
                </div>
                <div class="col-md-6">
                    <p><?=$userdata['email'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label><b>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
                </div>
                <div class="col-md-6">
                    <p><?=$userdata['mobile'];?></p>
                </div>
                <!--<div class="col-md-6">
                    <label>Business Type</label>
                </div>
                <div class="col-md-6">
                    <p><?/*=$userdata['business_type'];*/?></p>
                </div>

                <div class="col-md-6">
                    <label>Business Name</label>
                </div>
                <div class="col-md-6">
                    <p><?/*=$userdata['business_name'];*/?></p>
                </div>-->

                <div class="col-md-6">
                    <label><b>Password&nbsp;:</b></label>
                </div>
                <div class="col-md-6">
                    <p><?=$userdata['password'];?></p>
                </div>

                <div class="col-md-6">
                    <label><b>Refer By&nbsp;&nbsp;&nbsp;:</b></label>
                </div>
                <div class="col-md-6">
                    <p><?=$userdata['refer'];?></p>
                </div>
            </div>
        </div>

        <!--<h2>Order History</h2>
                <div class="col-sm-12">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th>S.No</th>
                            <th>Service Name</th>
                            <th>Message</th>
                            <th>Service Cost</th>
                            <th>Order ID</th>
                            <th>Payment Status</th>
                            <th>Transaction Date</th>
                            <th>Remarks</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
        $a = 1;
        $query2 = mysqli_query($conn,"SELECT * FROM payment WHERE user_id='$userid'");
        while($paymentdetails = mysqli_fetch_array($query2)){
            ?>
                            <tr>
                                <td><?=$a;?></td>
                                <td><?=$paymentdetails['service'];?></td>
                                <td><?=$paymentdetails['msg'];?></td>
                                <td><?=$paymentdetails['txn_amount'];?></td>
                                <td><?=$paymentdetails['order_id'];?></td>
                                <td><?=$paymentdetails['payment_status'];?></td>
                                <td><?=$paymentdetails['txn_date'];?></td>
                                <td>Remarks</td>
                            </tr>
                        <?php
            $a++;
        }
        ?>

                        </tbody>
                    </table>
                </div>-->
    </div>
</div>
</section>
<style>
    /*add full-width input fields*/
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
    .select-option {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
    .text-center h2 {
        color: #000;
    }
    label {
        color: #000;
    }
    /* set a style for all buttons*/
    button {
        background-color: #009dc4;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        cursor: pointer;
        width: 100%;
    }
    /*set styles for the cancel button*/
    .cancelbtn {
        padding: 14px 20px;
        background-color: #ffc107cc;
    }
    /*float cancel and signup buttons and add an equal width*/
    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%
    }

    /*add padding to container elements*/
    .container {
        padding: 16px;
    }
    .display-flex {
        display: flex;
    }
    .edit-profile {
        padding: 50px 40px;
        border: 10px solid #009dc4;
    }
    .clearfix.btn-update {
        padding: 20px 30px 0;
    }
    /*define the modal’s background*/

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }
    /*define the modal-content background*/

    .modal-content {
        background-color: #fefefe;
        margin: 0% auto 15% auto;
        border: 1px solid #888;
        width: 50%;
    }
    /*define the close button*/

    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        color: #000;
        font-size: 40px;
        font-weight: bold;
    }
    /*define the close hover and focus effects*/

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    @media screen and (max-width: 300px) {
        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>

<div id="id01" class="modal" style="z-index: 9999;">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" action="action/update_process.php" method="post">
        <div class="container edit-profile">
            <div class="col-sm-12 text-center">
                <h2>Update Profile</h2><br>
            </div>
            <div class="col-sm-12 display-flex">
                <div class="col-sm-6">
                    <label><b>Name *</b></label><br>
                    <input type="text" value="<?=$userdata['full_name']?>" placeholder="Enter Full Name" name="name" required>
                </div>
                <div class="col-sm-6">
                    <label><b>Email</b></label> <br>
                    <input title="Can't change email." type="text" value="<?=$userdata['email']?>" placeholder="Enter Email" readonly required>
                </div>
            </div>
            <input type="hidden" name="user_id" value="<?=$userdata['user_id']?>">
            <div class="col-sm-12 display-flex">
                <div class="col-sm-6">
                    <label><b>Phone *</b></label> <br>
                    <input type="text" value="<?=$userdata['mobile']?>" placeholder="Enter Phone" name="mobile" required>
                </div>
                <div class="col-sm-6">
                    <label><b>Password *</b></label> <br>
                    <input type="password" value="<?=$userdata['password']?>" placeholder="Enter Password" name="password" required>
                </div>
            </div>
            
            <div class="clearfix btn-update">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Reset</button>
                <button type="submit" name="sgnupbtn" value="1" class="signupbtn">Update</button>
            </div>
        </div>
    </form>
</div>

<script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php include('footer.php');?>

</body>
</html>