<?php session_start();?>
<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
	
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>Home | Income Tax Return</title>	
	<meta name="description" content="Wealthrun - Income Tax Return (ITR)">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style>
    #change-pass{padding-top:150px;}
    .p-3 {padding: 2rem!important;}
    img.wr-logo.logo-center {border: 1px solid;margin-bottom: 10px; margin-left: 37%;}
    </style>
    
</head>
<body>

<section id="change-pass">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-12 col-md-8 col-lg-6 pb-5">
    		    <div class="header-logo">
					<a href="index.php">
						<img class="wr-logo logo-center" alt="wealthrun" height="75px" src="img/wr-logo.png">
					</a>
				</div>
                <form action="action/change_pass_proceed.php" method="post">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Change Password</h3>
                                <!--<p class="m-0">Password will be send your mail id</p>-->
                            </div>
                        </div>
                       <?php
                        	if(isset($_SESSION['same_pass'])){ ?>
                        	    <div class="alert alert-warning alert-dismissible">
                        	        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        	        <strong>Warning!</strong> <?= $_SESSION['same_pass'];?>
                        	    </div>
                        	<?php
                        	}
                        	unset($_SESSION['same_pass']);
                        ?>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                    </div>
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                                </div>
                            </div>
                            <input type="hidden" name="mail_id" value="<?php echo $_REQUEST['mail_id'];?>">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                    </div>
                                    <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="update" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    	</div>
    </div>
</section>

</body>
</html>