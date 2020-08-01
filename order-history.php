<?php include("header.php"); ?>
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

<style>
#wrapper1, #wrapper2{width: 2300px; border: none 0px RED;
overflow-x: scroll; overflow-y:hidden;}
#wrapper1{height: 20px; }
#div1 {width: 2200px;height: 20px;}
</style>

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
        padding: 8px 20px;
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
    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 100%;
        padding: 4% 8%;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        background: #009dc4;
        font-size: 15px;
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
        float: right;
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
        background: #fff;
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
        margin: 0% auto 6% auto;
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

<body>
    <!--==================== Header Section Start =====================-->
	<?php
    if(!isset($_SESSION['full_name'])){
        header("Location:index.php");
        die;
    }
	?>
    <!--==================== Header Section End =====================-->
    
    <?php
    $userid = $_SESSION['userid'];
    $query1 = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$userid' ");
    $userdata = mysqli_fetch_array($query1);
    
    ?>
    
    <div class="container emp-profile">
        <div class="row">
            <div class="col-sm-12">
                <h2 align="center">Your Applications History</h2>
            </div>
            <div id="wrapper1">
                <div id="div1">
                </div>
            </div>
            
            <div id="wrapper2" class="col-sm-12" style="overflow-x:auto;">
                <div id="div2">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>Service</th>
                        <th>Cost</th>
                        <th>Documents</th>
                        <th class="remarks">Remarks</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Order_Id</th>
                        <th>Transaction_Id</th>
                        <th>Transaction_Status</th>
                        <th>Transaction_Date</th>
                        <th>Upload_Document</th>
                        <th>Make_Documents</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql1 = "SELECT * FROM payment WHERE `user_id` = '".$userid."' AND `is_deleted` != 1";
                        $result1 = mysqli_query($conn, $sql1);
                        $num1 = mysqli_num_rows($result1);

                        if($num1 > 0){
                            $count = 1;
                            while($paymentdetails = mysqli_fetch_array($result1)){
                                    $doccc = explode(',',$paymentdetails['docs']);
                                    $total = count($doccc);
                                    $color = $paymentdetails['status'] == 'query' ? '#e25151' : '';
                                ?>
                                <tr style="background-color: <?=$color?>;">
                                    <td><?=$count?>.</td>
                                    <td><?=$paymentdetails['service'];?></td>
                                    <td>Rs.<?=$paymentdetails['txn_amount'];?></td>
                                    <td>
                                        <?php for($i=0;$i<$total;$i++){ ?>
                                            <?=$i+1?>.<a target="_blank" href="uploaded_docs/<?php echo $doccc[$i]?>">
                                                <?=$doccc[$i];?></a></br>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($paymentdetails['remarks']){
                                            $a = json_decode($paymentdetails['remarks']);
                                            foreach ($a as $key => $value){
                                                echo '<p><b>Remark</b>: '.$value->remarks.', Time: '.$value->time.'</p>';
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?=array_search($paymentdetails['status'],array('Document Received' => 'received', 'In Process' => 'process', 'Query Pending' => 'query', 'Completed' => 'complete'))?></td>
                                    <td><?=$paymentdetails['msg'];?></td>
                                    <td><?=$paymentdetails['order_id'];?></td>
                                    <td><?=$paymentdetails['txn_id'];?></td>
                                    <td><?=$paymentdetails['payment_status'];?></td>
                                    <td><?=$paymentdetails['txn_date'];?></td>
                                    <td>
                                        <input onclick="document.getElementById('<?php echo $paymentdetails['payment_id']; ?>').style.display='block'" type="button" class="profile-edit-btn" value="Upload Documents"/>
                                    </td>
                                    <td>
                                        <?php
                                            if($paymentdetails['number'] > 0){
                                                $sql11 = "SELECT * FROM documents WHERE `service_id` = '".$paymentdetails['payment_id']."'";
                                                $result11 = mysqli_query($conn, $sql11);
                                                $num11 = mysqli_num_rows($result11);
                                                if($num11>0){
                                                    while ($fetch = mysqli_fetch_array($result11)){
                                                        ?>
                                                        Name: <?=$fetch['name']?>, Doc: <a target="_blank" href="uploaded_docs/<?=$fetch['doc']?>"><?=$fetch['doc']?></a><br>
                                                        <?php
                                                    }
                                                }else{
                                                    echo 'Document not uploaded';
                                                }
                                            }else{
                                                echo '...';
                                            }
                                        ?>
                                    </td>
                                </tr>

                                <div id="<?=$paymentdetails['payment_id']?>" class="modal" style="z-index: 9999;">
                                    <span onclick="document.getElementById('<?php echo $paymentdetails['payment_id']; ?>').style.display='none'" class="close" title="Close Modal">×</span>
                                    <form class="modal-content animate" enctype="multipart/form-data" action="action/upload_document.php" method="post">
                                        <div class="container edit-profile">
                                            <div class="col-sm-12 text-center">
                                                <h2><strong>Upload Document</strong></h2><br>
                                            </div>
                                            <div class="col-sm-12 display-flex">
                                            <?php if($paymentdetails['number'] > 0){
                                                for($i= 0; $i < $paymentdetails['number']; $i++){
                                            ?>
                                                <div class="col-sm-6">
                                                    <label><b>Document Name *</b></label><br>
                                                    <input type="text" placeholder="Document Name" name="name<?=$i?>" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label><b>Document *</b></label> <br>
                                                    <input class="select-option" type="file" placeholder="Document" name="doc<?=$i?>" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 display-flex">
                                            <?php }
                                            } ?>
                                            </div>
                                            <input type="hidden" name="payment_id" value="<?=$paymentdetails['payment_id']?>">
                                            <input type="hidden" name="number" value="<?=$paymentdetails['number']?>">
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-6">
                                                    <div class="clearfix btn-update">
                                                        <button type="submit" name="sgnupbtn" value="1" class="signupbtn">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php
                                $count++;
                            }
                        }else{
                            echo '<tr><td colspan="13">No Record Found !</td></tr>';
                        }
                    ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>         
    </div>
    <?php include('footer.php');?>
    <script>
        var wrapper1 = document.getElementById('wrapper1');
        var wrapper2 = document.getElementById('wrapper2');
        wrapper1.onscroll = function() {
          wrapper2.scrollLeft = wrapper1.scrollLeft;
        };
        wrapper2.onscroll = function() {
          wrapper1.scrollLeft = wrapper2.scrollLeft;
        };
    </script>
</body>
</html>